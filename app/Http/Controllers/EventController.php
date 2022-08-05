<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Tambak;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:event-list|event-create|event-edit|event-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:event-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:event-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:event-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $event = Event::where('user_id',auth()->user()->id)->get();
        $user = auth()->user();
        return view('event.index', compact('event'));
        // $mytime = Carbon::now()->format('Y-m-d');
        // echo $mytime;
    }

    public function produk()
    {
        $event = Event::all();
        $user = auth()->user();
        return view('event.index', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
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
            'judul' => 'required',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'produk_dijual' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'status' => 'required',
            'gambar_event' => 'mimes:png,jpg,jpeg',
        ]);
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['gambar_event'] = $request->file('gambar_event')->store('event');
        

        Event::create($data);

        return redirect()->route('event.index')->with(['success' => 'Data Berhasil Disimpan']);
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
        $event = Event::find($id);
        $user = User::all();
        $tambak = Tambak::all();

        return view('event.edit', [
            'event' => $event,
            'user' => $user,
            'tambak' => $tambak,
        ]);
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
        if(empty($request->file('gambar_event'))){
            $event = Event::find($id);
            $event->update([
                'user_id' => Auth::id(),
                'judul' => $request->judul,
                'tgl_mulai' => $request->tgl_mulai,
                'tgl_selesai' => $request->tgl_selesai,
                'lokasi' => $request->lokasi,
                'deskripsi' => $request->deskripsi,
                'produk_dijual' => $request->produk_dijual,
                'berat' => $request->berat,
                'harga' => $request->harga,
                'status' => $request->status,
            ]);
            return redirect()->route('event.index')->with(['success' => 'Data Berhasil Diedit']);
            
        }else {
            $event = Event::find($id);
            Storage::delete($event->gambar_event);
            $event->update([
                'user_id' => Auth::id(),
                'judul' => $request->judul,
                'tgl_mulai' => $request->tgl_mulai,
                'tgl_selesai' => $request->tgl_selesai,
                'lokasi' => $request->lokasi,
                'deskripsi' => $request->deskripsi,
                'produk_dijual' => $request->produk_dijual,
                'berat' => $request->berat,
                'harga' => $request->harga,
                'status' => $request->status,
                'gambar_event' => $request->file('gambar_event')->store('event'),
            ]);
            return redirect()->route('event.index')->with(['success' => 'Data Berhasil Diedit']);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);

        Storage::delete($event->gambar_event);
        
        $event->delete();

        return redirect()->route('event.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
