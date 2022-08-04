<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Jadwal;
use App\Models\KebutuhanPembudidaya;
use App\Models\KebutuhanPengepul;
use App\Models\Produk;
use App\Models\Tambak;
use App\Models\User;
use Spatie\Permission\Models\Role;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $usertotal = User::count();
        $produktotal = Produk::count();
        $jadwaltotal = Jadwal::count();
        $tambaktotal = Tambak::count();
        $eventtotal = Event::count();
        $kebutuhanpembudidayatotal = KebutuhanPembudidaya::count();
        $kebutuhanpengepultotal = KebutuhanPengepul::count();
        // dd($data);
        // return view('home', $data);
        return view('home', [
            'usertotal' => $usertotal,
            'produktotal' => $produktotal,
            'jadwaltotal' => $jadwaltotal,
            'tambaktotal' => $tambaktotal,
            'eventtotal' => $eventtotal,
            'kebutuhanpembudidayatotal' => $kebutuhanpembudidayatotal,
            'kebutuhanpengepultotal' => $kebutuhanpengepultotal,
        ]);
    }
}
