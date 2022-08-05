<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AktivitasController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:aktivitas', ['only' => ['index', 'show']]);
    }
    public function index(Request $request)
    {

        if($request->tgl_panen){
            // dd($request->tgl_panen);
            $jadwal =  DB::table('jadwals')->where('tgl_panen',$request->tgl_panen)->orderBy('aksi','asc')->get();
            $tgl_panen = DB::table('jadwals')->select('jadwals.tgl_panen')->get();
            // dd($jadwal);
            return view('aktivitas.index', [
                'jadwal' => $jadwal,
                'tgl_panen' => $tgl_panen,
            ]);
        }else{
            $jadwal = Jadwal::orderBy('aksi','asc')->get();
            $tgl_panen = DB::table('jadwals')->select('jadwals.tgl_panen')->get();
            // dd($coba);
            return view('aktivitas.index', [
                'jadwal' => $jadwal,
                'tgl_panen' => $tgl_panen,
            ]);
        }
        $jadwal = Jadwal::all();
        $user = auth()->user();
        return view('aktivitas.index', compact('jadwal'));
    }

    public function pdf(Request $request)
    {
        $jadwal = Jadwal::where('created_at', '>=', $request->mulai)
        ->where('created_at', '<=', $request->akhir)
        ->orderBy('aksi','asc')
        ->get();
        $data = [
            'jadwal' => $jadwal
        ];
        // dd($aktivity);
        return view('aktivitas.pdf',$data);

    }
    public function pdfAksi(Request $request)
    {
        $jadwal = Jadwal::where('aksi', $request->aksi)
        ->orderBy('aksi','asc')
        ->get();
        // dd($jadwal);    
        $data = [
            'jadwal' => $jadwal
        ];
        // dd($aktivity);
        return view('aktivitas.pdf',$data);

    }

}
