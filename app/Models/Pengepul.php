<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengepul extends Model
{
    use HasFactory;

    protected $table = 'pengepuls';

    protected $fillable = [
        'kategori_pengepul'
    ];


    protected $hidden = [];
}
