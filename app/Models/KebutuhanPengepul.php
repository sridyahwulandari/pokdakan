<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KebutuhanPengepul extends Model
{
    use HasFactory;

    protected $table = 'kebutuhan_pengepuls';

    protected $fillable = [
        'distributor_id', 'budidaya_id', 'user_id', 'tgl_kebutuhan', 'nama', 'jenis', 'jumlah'];

    protected $hidden = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function budidaya()
    {
        return $this->belongsTo(Budidaya::class, 'budidaya_id', 'id');
    }

    public function distributor()
    {
        return $this->belongsTo(Distributor::class, 'distributor_id', 'id');
    }
}
