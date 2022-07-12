<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:distributor-list|distributor-create|distributor-edit|distributor-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:distributor-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:distributor-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:distributor-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $data = Distributor::latest()->paginate(5);
        $distributor = Distributor::all();
        return view('distributor.index', compact('distributor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('distributor.create');
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
            'pengepul' => 'required|min:4',
        ]);
        $distributor = Distributor::create([
            'pengepul' => $request->pengepul, 
            'slug' => Str::slug($request->pengepul)
        ]);

        return redirect()->route('distributor.index')->with(['success' => 'Data Berhasil Disimpan']);
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
        $distributor = Distributor::find($id);

        return view('distributor.edit', compact('distributor'));
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
        $data['slug'] = Str::slug($request->pengepul);

        $distributor = Distributor::findOrFail($id);
        $distributor->update($data);

        return redirect()->route('distributor.index')->with(['success' => 'Data Berhasil Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $distributor = Distributor::find($id);

        $distributor->delete();

        return redirect()->route('distributor.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
