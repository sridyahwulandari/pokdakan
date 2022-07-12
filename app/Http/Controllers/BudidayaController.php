<?php

namespace App\Http\Controllers;

use App\Models\Budidaya;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BudidayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:budidaya-list|budidaya-create|budidaya-edit|budidaya-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:budidaya-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:budidaya-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:budidaya-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $data = Budidaya::latest()->paginate(5);
        $budidaya = Budidaya::all();
        return view('budidaya.index', compact('budidaya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('budidaya.create');
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
            'kategori_budidaya' => 'required|min:4',
        ]);
        $budidaya = Budidaya::create([
            'kategori_budidaya' => $request->kategori_budidaya, 
            'slug' => Str::slug($request->kategori_budidaya)
        ]);

        return redirect()->route('budidaya.index')->with(['success' => 'Data Berhasil Disimpan']);
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
        $budidaya = Budidaya::find($id);

        return view('budidaya.edit', compact('budidaya'));
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
        $data['slug'] = Str::slug($request->kategori_budidaya);

        $budidaya = Budidaya::findOrFail($id);
        $budidaya->update($data);

        return redirect()->route('budidaya.index')->with(['success' => 'Data Berhasil Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $budidaya = Budidaya::find($id);

        $budidaya->delete();

        return redirect()->route('budidaya.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
