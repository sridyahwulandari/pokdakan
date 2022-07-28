<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class AktivitasController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:aktivitas', ['only' => ['index', 'show']]);
    }
    public function index()
    {
        $jadwal = Jadwal::all();
        $user = auth()->user();
        return view('aktivitas.index', compact('jadwal'));
    }
}
