<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KebutuhanPengepul extends Model
{
    use HasFactory;

    protected $table = 'kebutuhan_pengepuls';

    protected $fillable = [
        'pengepul_id', 'pembudidaya_id', 'user_id', 'tgl_kebutuhan', 'nama', 'jenis', 'jumlah'];

    protected $hidden = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function pembudidaya()
    {
        return $this->belongsTo(Pembudidaya::class, 'pembudidaya_id', 'id');
    }

    public function pengepul()
    {
        return $this->belongsTo(Pengepul::class, 'pengepul_id', 'id');
    }
}
