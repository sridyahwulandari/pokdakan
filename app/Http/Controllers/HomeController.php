<?php

namespace App\Http\Controllers;

use App\Models\Produk;
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
        $data = [
            'produk' => Produk::count(),
        ];
        // dd($data);
        return view('home', $data);
    }
}
