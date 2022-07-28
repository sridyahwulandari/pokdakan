<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:produk-list|produk-create|produk-edit|produk-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:produk-tersedia|produk-create|produk-edit|produk-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:produk-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:produk-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:produk-delete', ['only' => ['destroy']]);
         $this->middleware('permission:produk-show', ['only' => ['show']]);
    }
    public function index()
    {
        $produk = Produk::where('user_id',auth()->user()->id)->get();
        $user = auth()->user();
        return view('produk.index', compact('produk'));
    }

    public function produktersedia()
    {
        $produk = Produk::all();
        $user = auth()->user();
        return view('produk.produktersedia', compact('produk'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = Supplier::all();
        return view('produk.create', compact('supplier'));
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
            'nama_produk' => 'required',
            'jenis' => 'required',
            'merk' => 'required',
            'kondisi' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'gambar_produk_supplier' => 'mimes:png,jpg,jpeg',
        ]);
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['slug'] = Str::slug($request->nama_produk);
        $data['gambar_produk_supplier'] = $request->file('gambar_produk_supplier')->store('produk');
        

        Produk::create($data);

        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::find($id);
        $supplier = Supplier::all();
        $user = User::all();

        return view('produk.show', [
            'produk' => $produk,
            'supplier' => $supplier,
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
        $produk = Produk::find($id);
        $supplier = Supplier::all();
        $user = User::all();

        return view('produk.edit', [
            'produk' => $produk,
            'supplier' => $supplier,
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
        if(empty($request->file('gambar_produk_supplier'))){
            $produk = Produk::find($id);
            $produk->update([
                'user_id' => Auth::id(),
                'supplier_id' => $request->supplier_id,
                'nama_produk' => $request->nama_produk,
                'slug' => Str::slug($request->nama_produk),
                'jenis' => $request->jenis,
                'merk' => $request->merk,
                'kondisi' => $request->kondisi,
                'berat' => $request->berat,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Diedit']);
            
        }else {
            $produk = Produk::find($id);
            Storage::delete($produk->gambar_produk_supplier);
            $produk->update([
                'user_id' => Auth::id(),
                'supplier_id' => $request->supplier_id,
                'nama_produk' => $request->nama_produk,
                'slug' => Str::slug($request->nama_produk),
                'jenis' => $request->jenis,
                'merk' => $request->merk,
                'kondisi' => $request->kondisi,
                'berat' => $request->berat,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'deskripsi' => $request->deskripsi,
                'gambar_produk_supplier' => $request->file('gambar_produk_supplier')->store('produk'),
            ]);
            return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Diedit']);

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
        $produk = Produk::find($id);

        Storage::delete($produk->gambar_produk_supplier);
        
        $produk->delete();

        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
