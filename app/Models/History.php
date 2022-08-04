<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'histories';

    protected $fillable = [
        'user_id', 'event_id', 'pengepul_id', 'nama_pembeli', 'produk_terjual'
    ];


    protected $hidden = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }

    public function pengepul()
    {
        return $this->belongsTo(Pengepul::class, 'pengepul_id', 'id');
    }
}
