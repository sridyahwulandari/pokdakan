<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function hubungi()
    {
        return view('frontend.hubungi-kami.index');
    }
}
