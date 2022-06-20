<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\User;
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
    public function index()
    {
        $produk = Produk::all();
        $user = auth()->user();
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('produk.create', compact('kategori'));
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
            'jenis_ikan' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'alamat' => 'required',
            'notlpn' => 'required',
            'deskripsi' => 'required',
            'gambar_produk' => 'mimes:png,jpg,jpeg',
            'video_produk' => 'mimes:mp4',
        ]);
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['slug'] = Str::slug($request->jenis_ikan);
        $data['gambar_produk'] = $request->file('gambar_produk')->store('produk');
        $data['video_produk'] = $request->file('video_produk')->store('produk');
        

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
        //
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
        $kategori = Kategori::all();
        $user = User::all();

        return view('produk.edit', [
            'produk' => $produk,
            'kategori' => $kategori,
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
        if(empty($request->file('gambar_produk', 'video_produk'))){
            $produk = Produk::find($id);
            $produk->update([
                'user_id' => Auth::id(),
                'kategori_id' => $request->kategori_id,
                'jenis_ikan' => $request->jenis_ikan,
                'slug' => Str::slug($request->jenis_ikan),
                'harga' => $request->harga,
                'stok' => $request->stok,
                'alamat' => $request->alamat,
                'notlpn' => $request->notlpn,
                'deskripsi' => $request->deskripsi,
                'status' => $request->status,
            ]);
            return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Diedit']);
            
        }else {
            $produk = Produk::find($id);
            Storage::delete($produk->gambar_produk);
            Storage::delete($produk->video_produk);
            $produk->update([
                'user_id' => Auth::id(),
                'kategori_id' => $request->kategori_id,
                'jenis_ikan' => $request->jenis_ikan,
                'slug' => Str::slug($request->jenis_ikan),
                'harga' => $request->harga,
                'stok' => $request->stok,
                'alamat' => $request->alamat,
                'notlpn' => $request->notlpn,
                'deskripsi' => $request->deskripsi,
                'status' => $request->status,
                'gambar_produk' => $request->file('gambar_produk')->store('produk'),
                'video_produk' => $request->file('video_produk')->store('produk'),
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

        Storage::delete($produk->gambar_produk);
        Storage::delete($produk->video_produk);
        
        $produk->delete();

        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
