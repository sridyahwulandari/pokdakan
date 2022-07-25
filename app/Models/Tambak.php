<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tambak extends Model
{
    use HasFactory;

    protected $table = 'tambaks';

    protected $fillable = [
        'user_id', 'nama_tambak', 'luas_tambak', 'kedalaman', 'kapasitas_ikan', 'gambar_tambak', 'status'];

    protected $hidden = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
