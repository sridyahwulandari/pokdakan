<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KebutuhanPembudidaya extends Model
{
    use HasFactory;

    protected $table = 'kebutuhan_pembudidayas';

    protected $fillable = [
        'supplier_id', 'budidaya_id', 'user_id', 'tgl_kebutuhan', 'nama', 'jenis', 'jumlah'];

    protected $hidden = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function budidaya()
    {
        return $this->belongsTo(Budidaya::class, 'budidaya_id', 'id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }
}
