<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSend;
use App\Models\Berita;
use App\Models\Edukasi;
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

    public function edukasiFront()
    {
        $edukasi = Edukasi::all();
        return view('frontend.edukasi-front.index', [
            'edukasi' => $edukasi,
        ]);
    }

    public function edukasiFrontDetail($slug)
    {
        $edukasi = Edukasi::where('slug', $slug)->first();
        return view('frontend.edukasi-front-detail.index', [
            'edukasi' => $edukasi,
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
