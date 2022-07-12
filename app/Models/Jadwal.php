<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';

    protected $fillable = [
         'user_id','tambak_id', 'tgl_bibit', 'tgl_pakan', 'jumlah_bibit', 'jumlah_pakan', 'jenis_pakan', 'usia_tambak', 'aksi'
    ];

    protected $hidden = [];

    public function tambak()
    {
        return $this->belongsTo(Tambak::class, 'tambak_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
