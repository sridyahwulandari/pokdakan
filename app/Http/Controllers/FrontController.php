<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSend;

class FrontController extends Controller
{
    public function index()
    {
        return view('front');
    }

    public function beranda()
    {
        return view('frontend.beranda.index');
    }

    public function tentang()
    {
        return view('frontend.tentang-kami.index');
    }

    public function acara()
    {
        return view('frontend.acara.index');
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
