<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:berita-list|berita-create|berita-edit|berita-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:berita-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:berita-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:berita-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $berita = Berita::all();
        $user = auth()->user();
        return view('berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
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
            'kategori' => 'required',
            'judul_berita' => 'required',
            'deskripsi' => 'required',
            'gambar_berita' => 'mimes:png,jpg,jpeg',
        ]);
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['slug'] = Str::slug($request->judul_berita);
        $data['gambar_berita'] = $request->file('gambar_berita')->store('berita');
        

        Berita::create($data);

        return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Disimpan']);
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
        $berita = Berita::find($id);
        $user = User::all();

        return view('berita.edit', [
            'berita' => $berita,
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
        if(empty($request->file('gambar_berita'))){
            $berita = Berita::find($id);
            $berita->update([
                'user_id' => Auth::id(),
                'kategori' => $request->kategori,
                'judul_berita' => $request->judul_berita,
                'slug' => Str::slug($request->judul_berita),
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Diedit']);
            
        }else {
            $berita = Berita::find($id);
            Storage::delete($berita->gambar_berita);
            $berita->update([
                'user_id' => Auth::id(),
                'kategori' => $request->kategori,
                'judul_berita' => $request->judul_berita,
                'slug' => Str::slug($request->judul_berita),
                'deskripsi' => $request->deskripsi,
                'gambar_berita' => $request->file('gambar_berita')->store('berita'),
            ]);
            return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Diedit']);

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
        $berita = Berita::find($id);

        Storage::delete($berita->gambar_berita);
        
        $berita->delete();

        return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
