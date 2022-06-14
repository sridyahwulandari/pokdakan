<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:jenis-list|jenis-create|jenis-edit|jenis-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:jenis-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:jenis-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:jenis-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $data = Jenis::latest()->paginate(5);
        $jenis = Jenis::all();
        return view('jenis.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis.create');
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
            'jenis_ikan' => 'required|min:4',
        ]);
        $jenis = Jenis::create([
            'jenis_ikan' => $request->jenis_ikan, 
            'slug' => Str::slug($request->jenis_ikan)
        ]);

        return redirect()->route('jenis.index')->with(['success' => 'Data Berhasil Disimpan']);
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
        $jenis = Jenis::find($id);

        return view('jenis.edit', compact('jenis'));
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
        $data['slug'] = Str::slug($request->jenis_ikan);

        $jenis = Jenis::findOrFail($id);
        $jenis->update($data);

        return redirect()->route('jenis.index')->with(['success' => 'Data Berhasil Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis = Jenis::find($id);

        $jenis->delete();

        return redirect()->route('jenis.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
