<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSend;
use App\Models\Berita;
use App\Models\Event;
use App\Models\Jadwal;
use App\Models\Produk;
use App\Models\Tambak;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        return view('front');
    }

    public function beranda()
    {
        $user = User::all();
        $event = Event::all();
        return view('frontend.beranda.index', [
            'user' => $user,
            'event' => $event,
        ]);
    }

    public function berandaDetail()
    {
        return view('frontend.beranda-detail.index');
    }

    public function tentang()
    {

        return view('frontend.tentang-kami.index');
    }

    public function acaraFront()
    {
        return view('frontend.acara-front.index');
    }

    public function beritaFront()
    {
        $berita = Berita::all();
        return view('frontend.berita-front.index', [
            'berita' => $berita,
        ]);
    }

    public function beritaFrontDetail($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('frontend.berita-front-detail.index', [
            'berita' => $berita,
        ]);
    }
    
    public function produkFront(Request $request)
    {
        if($request->more_view){
            $produktotal = Produk::count();
        $usertotal = User::count();
        $jadwaltotal = Jadwal::count();
        $beritatotal = Berita::count();
        // dd($produktotal);
        $totalP = $request->more_view * 3;
        $produk = Produk::paginate($totalP);
        return view('frontend.produk-front.index', [
            'produk' => $produk,
            'produktotal' => $produktotal,
            'usertotal' => $usertotal,
            'jadwaltotal' => $jadwaltotal,
            'beritatotal' => $beritatotal,
            'total_view' => ($request->more_view) ? $totalP : '9',
        ]);
        }else{
            $produktotal = Produk::count();
        $usertotal = User::count();
        $jadwaltotal = Jadwal::count();
        $beritatotal = Berita::count();
// dd($produktotal);
        $produk = Produk::paginate(3);
        return view('frontend.produk-front.index', [
            'produk' => $produk,
            'produktotal' => $produktotal,
            'usertotal' => $usertotal,
            'jadwaltotal' => $jadwaltotal,
            'beritatotal' => $beritatotal,
            'total_view' => ($request->more_view) ? $request->more_view : '9',
        ]);
        }
        // return view('home', $data);
    }

    public function produkFrontDetail($slug)
    {
        $produk = Produk::all();
        $produk = Produk::where('slug', $slug)->first();
        return view('frontend.produk-front-detail.index', [
            'produk' => $produk,
        ]);
    }

    public function eventFront(Request $request)
    {
        if($request->tgl_selesai){
            // dd($request->tgl_selesai);
            $event =  DB::table('events')->where('tgl_selesai',$request->tgl_selesai)->latest()->get();
            $tgl_selesei = DB::table('events')->select('events.tgl_selesai')->get();
            // dd($event);
            return view('frontend.event-front.index', [
                'event' => $event,
                'tgl_selesai' => $tgl_selesei,
            ]);
        }else{
            $data = Event::all();
            $now_date = Carbon::now()->format('Y-m-d');
            foreach ($data as $key => $value) {
                if ($now_date > $value->tgl_selesai) {
                    $item = Event::find($value->id);
                    $item->update([
                        'status' => 0,
                    ]);
                } 
                
            }
            $event = Event::where('status', 1)->get();
            $tgl_selesei = DB::table('events')->select('events.tgl_selesai')->get();
            return view('frontend.event-front.index', [
                'event' => $event,
                'tgl_selesai' => $tgl_selesei,
            ]);
        }

    }

    public function jadwalFront()
    {
        $jadwal = Jadwal::all();
        $tambak = Tambak::all();
        return view('frontend.jadwal-front.index', [
            'jadwal' => $jadwal,
            'tambak' => $tambak,
        ]);
    }

    // public function hubungi()
    // {
    //     return view('frontend.hubungi-kami.index');
    // }

    public function formemail()
    {
        return view('frontend.hubungi-kami.formemail');
    }

    public function kirim(Request $request)
    {
        $details = [
            'nama' => $request->nama,
            'judul' => $request->judul,
            'pesan' => $request->pesan
        ];

        Mail::to($request->email)->send(new MailSend($details));

        return redirect()->back()->with('success', 'Pesan Berhasil Terkirim');
    }
}
