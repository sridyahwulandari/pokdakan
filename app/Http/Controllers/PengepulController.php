<?php

namespace App\Http\Controllers;

use App\Models\Pengepul;
use Illuminate\Http\Request;

class PengepulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:pengepul-list|pengepul-create|pengepul-edit|pengepul-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:pengepul-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:pengepul-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:pengepul-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $data = Pengepul::latest()->paginate(5);
        $pengepul = Pengepul::all();
        return view('pengepul.index', compact('pengepul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengepul.create');
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
            'kategori_pengepul' => 'required|min:4',
        ]);
        $pengepul = Pengepul::create([
            'kategori_pengepul' => $request->kategori_pengepul,
        ]);

        return redirect()->route('pengepul.index')->with(['success' => 'Data Berhasil Disimpan']);
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
        $pengepul = Pengepul::find($id);

        return view('pengepul.edit', compact('pengepul'));
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

        $pengepul = Pengepul::findOrFail($id);
        $pengepul->update($data);

        return redirect()->route('pengepul.index')->with(['success' => 'Data Berhasil Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengepul = Pengepul::find($id);

        $pengepul->delete();

        return redirect()->route('pengepul.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
