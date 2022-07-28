<?php

namespace App\Http\Controllers;

use App\Models\Pembudidaya;
use App\Models\KebutuhanPembudidaya;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KebutuhanPembudidayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:kebutuhan-pembudidaya-list|kebutuhan-pembudidaya-create|kebutuhan-pembudidaya-edit|kebutuhan-pembudidaya-delete|kebutuhan-pembudidaya-detail', ['only' => ['index', 'show']]);
         $this->middleware('permission:kebutuhan-pembudidaya-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:kebutuhan-pembudidaya-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:kebutuhan-pembudidaya-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $kebutuhanpembudidaya = KebutuhanPembudidaya::where('user_id',auth()->user()->id)->get();
        $user = auth()->user();
        return view('kebutuhan-pembudidaya.index', compact('kebutuhanpembudidaya'));
    }

    public function detailkebutuhanpembudidaya()
    {
        $kebutuhanpembudidaya = KebutuhanPembudidaya::all();
        $user = auth()->user();
        return view('kebutuhan-pembudidaya.detail', compact('kebutuhanpembudidaya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = Supplier::all();
        $pembudidaya = Pembudidaya::all();
        return view('kebutuhan-pembudidaya.create',[
            'supplier' => $supplier,
            'pembudidaya' => $pembudidaya,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tgl_kebutuhan' => 'required',
            'nama' => 'required',
            'jenis' => 'required',
            'jumlah' => 'required',
        ]);
        $data = $request->all();
        $data['user_id'] = Auth::id();
    
        KebutuhanPembudidaya::create($data);

        return redirect()->route('kebutuhan-pembudidaya.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kebutuhanpembudidaya = KebutuhanPembudidaya::find($id);
        $supplier = Supplier::all();
        $pembudidaya = Pembudidaya::all();
        $user = User::all();

        return view('kebutuhan-pembudidaya.show', [
            'kebutuhanpembudidaya' => $kebutuhanpembudidaya,
            'supplier' => $supplier,
            'pembudidaya' => $pembudidaya,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kebutuhanpembudidaya = KebutuhanPembudidaya::find($id);
        $supplier = Supplier::all();
        $pembudidaya = Pembudidaya::all();
        $user = User::all();

        return view('produk.edit', [
            'kebutuhanpembudidaya' => $kebutuhanpembudidaya,
            'supplier' => $supplier,
            'pembudidaya' => $pembudidaya,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(empty($request->file('gambar_produk_supplier_supplier'))){
            $kebutuhanpembudidaya = KebutuhanPembudidaya::find($id);
            $kebutuhanpembudidaya->update([
                'user_id' => Auth::id(),
                'supplier_id' => $request->supplier_id,
                'budidaya_id' => $request->budidaya_id,
                'tgl_kebutuhan' => $request->tgl_kebutuhan,
                'nama' => $request->nama,
                'jenis' => $request->jenis,
                'jumlah' => $request->jumlah,
            ]);
            return redirect()->route('kebutuhan-pembudidaya.index')->with(['success' => 'Data Berhasil Diedit']);
            
        }else {
                $kebutuhanpembudidaya = KebutuhanPembudidaya::find($id);
                $kebutuhanpembudidaya->update([
                'user_id' => Auth::id(),
                'supplier_id' => $request->supplier_id,
                'budidaya_id' => $request->budidaya_id,
                'tgl_kebutuhan' => $request->tgl_kebutuhan,
                'nama' => $request->nama,
                'jenis' => $request->jenis,
                'jumlah' => $request->jumlah,
            ]);
            return redirect()->route('kebutuhan-pembudidaya.index')->with(['success' => 'Data Berhasil Diedit']);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kebutuhanpembudidaya = KebutuhanPembudidaya::find($id);
        
        $kebutuhanpembudidaya->delete();

        return redirect()->route('kebutuhan-pembudidaya.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
