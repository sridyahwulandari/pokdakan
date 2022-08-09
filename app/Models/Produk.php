<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';

    protected $fillable = [
         'user_id', 'supplier_id', 'nama_produk', 'slug', 'jenis', 'merk', 'kondisi', 'berat', 'harga', 'stok', 'deskripsi', 'gambar_produk_supplier'
    ];

    protected $hidden = [];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
