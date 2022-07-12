<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Tambak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $jadwal = Jadwal::where('aksi','tebar_bibit')->get();
        $jadwal = Jadwal::where('user_id',auth()->user()->id)->get();
        return view('jadwal.index', compact('jadwal'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tambak = Tambak::all();
        return view('jadwal.create', compact('tambak'));
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
            'tgl_bibit' => 'required',
            'jumlah_bibit' => 'required',
            'tgl_pakan' => 'required',
            'jumlah_pakan' => 'required',
            'jenis_pakan' => 'required',
            'usia_tambak' => 'required',
            'aksi' => 'required',
        ]);
        $data = $request->all();

        // dd($data->aksi);
        

        $data['user_id'] = Auth::id();
        Jadwal::create($data);

        return redirect()->route('jadwal.index')->with(['success' => 'Data Berhasil Disimpan']);
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
        //
    }

    public function updatePAksi($id)
    {
        $jadwal = Jadwal::find($id);

        $jadwal->aksi = 'pembesaran_ikan' ;
        // dd($jadwal);
        $jadwal->update();
        return redirect('pembesaran')->with(['success' => 'Data Berhasil Disimpan']);


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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
