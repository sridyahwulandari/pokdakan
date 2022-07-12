<?php

namespace App\Http\Controllers;

use App\Models\Budidaya;
use App\Models\Distributor;
use App\Models\KebutuhanPengepul;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KebutuhanPengepulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:kebutuhan-pengepul-list|kebutuhan-pengepul-create|kebutuhan-pengepul-edit|kebutuhan-pengepul-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:kebutuhan-pengepul-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:kebutuhan-pengepul-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:kebutuhan-pengepul-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $kebutuhanpengepul = KebutuhanPengepul::all();
        $user = auth()->user();
        return view('kebutuhan-pengepul.index', compact('kebutuhanpengepul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $distributor = Distributor::all();
        $budidaya = Budidaya::all();
        return view('kebutuhan-pengepul.create',[
            'distributor' => $distributor,
            'budidaya' => $budidaya,
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
    
        KebutuhanPengepul::create($data);

        return redirect()->route('kebutuhan-pengepul.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kebutuhanpengepul = KebutuhanPengepul::find($id);
        $distributor = Distributor::all();
        $budidaya = Budidaya::all();
        $user = User::all();

        return view('kebutuhan-pengepul.show', [
            'kebutuhanpengepul' => $kebutuhanpengepul,
            'distributor' => $distributor,
            'budidaya' => $budidaya,
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
        $kebutuhanpengepul = KebutuhanPengepul::find($id);
        $distributor = Distributor::all();
        $budidaya = Budidaya::all();
        $user = User::all();

        return view('kebutuhan-pengepul.edit', [
            'kebutuhanpengepul' => $kebutuhanpengepul,
            'distributor' => $distributor,
            'budidaya' => $budidaya,
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
        if(empty($request->file(''))){
            $kebutuhanpengepul = KebutuhanPengepul::find($id);
            $kebutuhanpengepul->update([
                'user_id' => Auth::id(),
                'supplier_id' => $request->supplier_id,
                'budidaya_id' => $request->budidaya_id,
                'tgl_kebutuhan' => $request->tgl_kebutuhan,
                'nama' => $request->nama,
                'jenis' => $request->jenis,
                'jumlah' => $request->jumlah,
            ]);
            return redirect()->route('kebutuhan-pengepul.index')->with(['success' => 'Data Berhasil Diedit']);
            
        }else {
                $kebutuhanpengepul = KebutuhanPengepul::find($id);
                $kebutuhanpengepul->update([
                'user_id' => Auth::id(),
                'supplier_id' => $request->supplier_id,
                'budidaya_id' => $request->budidaya_id,
                'tgl_kebutuhan' => $request->tgl_kebutuhan,
                'nama' => $request->nama,
                'jenis' => $request->jenis,
                'jumlah' => $request->jumlah,
            ]);
            return redirect()->route('kebutuhan-pengepul.index')->with(['success' => 'Data Berhasil Diedit']);

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
        $kebutuhanpengepul = KebutuhanPengepul::find($id);
        
        $kebutuhanpengepul->delete();

        return redirect()->route('kebutuhan-pengepul.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
