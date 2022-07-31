<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSend;
use App\Models\Berita;
use App\Models\Edukasi;
use App\Models\Event;
use App\Models\Jadwal;
use App\Models\Produk;
use App\Models\User;

class FrontController extends Controller
{
    public function index()
    {
        return view('front');
    }

    public function beranda()
    {
        $user = User::all();
        return view('frontend.beranda.index', [
            'user' => $user
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
    
    public function produkFront()
    {
        $produktotal = Produk::count();
        $usertotal = User::count();
        $jadwaltotal = Jadwal::count();
        $beritatotal = Berita::count();
// dd($produktotal);
        $produk = Produk::all();
        return view('frontend.produk-front.index', [
            'produk' => $produk,
            'produktotal' => $produktotal,
            'usertotal' => $usertotal,
            'jadwaltotal' => $jadwaltotal,
            'beritatotal' => $beritatotal,
        ]);
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

    public function eventFront($request)
    {
        $event = Event::where('tgl_mulai',$request->tgl_mulai)->get();
        return view('frontend.event-front.index', [
            'event' => $event,
        ]);
    }

    public function jadwalFront()
    {
        $jadwal = Jadwal::all();
        return view('frontend.jadwal-front.index', [
            'jadwal' => $jadwal,
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
