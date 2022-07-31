<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'user_id', 'judul', 'tgl_mulai', 'tgl_selesai', 'lokasi', 'deskripsi', 'produk_dijual', 'berat', 'gambar_event'
    ];


    protected $hidden = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
