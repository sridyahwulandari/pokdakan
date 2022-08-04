<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\History;
use App\Models\Pengepul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = History::where('user_id',auth()->user()->id)->get();
        $user = auth()->user();
        return view('history.index', compact('history'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = Event::where('user_id',auth()->user()->id)->get();
        $pengepul = Pengepul::all();
        return view('history.create', compact('event', 'pengepul'));
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
            'nama_pembeli' => 'required',
            'produk_terjual' => 'required',
        ]);
        if($request->produk_terjual < 0){
            return redirect()->route('history.index')->with(['success' => 'Data gagal Disimpan,input produk terjual tidak boleh kurang dari 1']);

        }else{
        $data = $request->all();
        $data['user_id'] = Auth::id();
        

        History::create($data);

        $event = Event::find($request->event_id);

        $event->produk_dijual = $event->produk_dijual - $request->produk_terjual;
        $event->update();

        return redirect()->route('history.index')->with(['success' => 'Data Berhasil Disimpan']);
        }
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
