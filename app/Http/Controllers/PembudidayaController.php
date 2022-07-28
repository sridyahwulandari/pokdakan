<?php

namespace App\Http\Controllers;

use App\Models\Pembudidaya;
use Illuminate\Http\Request;

class PembudidayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:pembudidaya-list|pembudidaya-create|pembudidaya-edit|pembudidaya-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:pembudidaya-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:pembudidaya-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:pembudidaya-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        // $data = Pembudidaya::latest()->paginate(100);
        $data = Pembudidaya::orderBy('id', 'desc')->paginate(100);
        $pembudidaya = Pembudidaya::all();
        return view('pembudidaya.index', compact('pembudidaya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembudidaya.create');
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
            'kategori_pembudidaya' => 'required|min:4',
        ]);
        $pembudidaya = Pembudidaya::create([
            'kategori_pembudidaya' => $request->kategori_pembudidaya,
        ]);

        return redirect()->route('pembudidaya.index')->with(['success' => 'Data Berhasil Disimpan']);
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
        $pembudidaya = Pembudidaya::find($id);

        return view('pembudidaya.edit', compact('pembudidaya'));
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
        $data = $request->all();

        $pembudidaya = Pembudidaya::findOrFail($id);
        $pembudidaya->update($data);

        return redirect()->route('pembudidaya.index')->with(['success' => 'Data Berhasil Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembudidaya = Pembudidaya::find($id);

        $pembudidaya->delete();

        return redirect()->route('pembudidaya.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
