<?php

namespace App\Http\Controllers;

use App\Models\Tambak;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TambakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:tambak-list|tambak-create|tambak-edit|tambak-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:tambak-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:tambak-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:tambak-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $tambak = Tambak::where('user_id',auth()->user()->id)->get();
        $user = auth()->user();
        return view('tambak.index', compact('tambak'));
    }

    public function produk()
    {
        $tambak = Tambak::all();
        $user = auth()->user();
        return view('tambak.index', compact('tambak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambak.create');
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
            'nama_tambak' => 'required',
            'luas_tambak' => 'required',
            'kedalaman' => 'required',
            'kapasitas_ikan' => 'required',
            'gambar_tambak' => 'mimes:png,jpg,jpeg',
        ]);
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['gambar_tambak'] = $request->file('gambar_tambak')->store('tambak');
        

        Tambak::create($data);

        return redirect()->route('tambak.index')->with(['success' => 'Data Berhasil Disimpan']);
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
        $tambak = Tambak::find($id);
        $user = User::all();

        return view('tambak.edit', [
            'tambak' => $tambak,
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
        if(empty($request->file('gambar_tambak'))){
            $tambak = Tambak::find($id);
            $tambak->update([
                'user_id' => Auth::id(),
                'nama_tambak' => $request->nama_tambak,
                'luas_tambak' => $request->luas_tambak,
                'kedalaman' => $request->kedalaman,
                'kapasitas_ikan' => $request->kapasitas_ikan,
                'status' => $request->status,
            ]);
            return redirect()->route('tambak.index')->with(['success' => 'Data Berhasil Diedit']);
            
        }else {
            $tambak = Tambak::find($id);
            Storage::delete($tambak->gambar_tambak);
            $tambak->update([
                'user_id' => Auth::id(),
                'nama_tambak' => $request->nama_tambak,
                'luas_tambak' => $request->luas_tambak,
                'kedalaman' => $request->kedalaman,
                'kapasitas_ikan' => $request->kapasitas_ikan,
                'status' => $request->status,
                'gambar_tambak' => $request->file('gambar_tambak')->store('tambak'),
            ]);
            return redirect()->route('tambak.index')->with(['success' => 'Data Berhasil Diedit']);

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
        $tambak = Tambak::find($id);

        Storage::delete($tambak->gambar_tambak);
        
        $tambak->delete();

        return redirect()->route('tambak.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
