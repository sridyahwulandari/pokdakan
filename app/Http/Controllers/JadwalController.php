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
    function __construct()
    {
         $this->middleware('permission:jadwal-list|jadwal-create|jadwal-edit|jadwal-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:jadwal-tersedia|jadwal-create|jadwal-edit|jadwal-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:jadwal-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:jadwal-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:jadwal-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $user = auth()->user();
        $jadwal = Jadwal::where('aksi','tebar_bibit')->where('user_id',auth()->user()->id)->get();
        // $jadwal = Jadwal::where()->get();
        return view('jadwal.index', compact('jadwal'));
    }

    public function hasilpanen()
    {
        $jadwal = Jadwal::all();
        $user = auth()->user();
        return view('jadwal.hasilpanen', compact('jadwal'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $tambak = Tambak::all();
        $tambak = Tambak::where('user_id',auth()->user()->id)->get();
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
            'tgl_panen' => 'required',
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

    public function updatePaksi($id)
    {
        $jadwal = Jadwal::find($id);

        $jadwal->aksi = 'pembesaran_ikan' ;
        // dd($jadwal);
        $jadwal->update();
        return redirect('pembesaran')->with(['success' => 'Data Berhasil Disimpan']);


    }

    public function updatePanenAksi($id)
    {
        $jadwal = Jadwal::find($id);

        $jadwal->aksi = 'panen' ;
        // dd($jadwal);
        $jadwal->update();
        return redirect('panen')->with(['success' => 'Data Berhasil Disimpan']);


    }

    public function updatePembesaranAksi($id)
    {
        $jadwal = Jadwal::find($id);

        $jadwal->aksi = 'panen' ;
        // dd($jadwal);
        $jadwal->update();
        return redirect('panen')->with(['success' => 'Data Berhasil Disimpan']);


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
