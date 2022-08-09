<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'user_id', 'judul', 'slug', 'tgl_mulai', 'tgl_selesai', 'lokasi', 'deskripsi', 'produk_dijual', 'berat', 'harga', 'gambar_event', 'status',
    ];


    protected $hidden = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // public function histories()
    // {
    //     return $this->belongsTo(History::class, 'historie_id', 'id');
    // }

    // public function tambak()
    // {
    //     return $this->belongsTo(Tambak::class, 'tambak_id', 'id');
    // }


}
