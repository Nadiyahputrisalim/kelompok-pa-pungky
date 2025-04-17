<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisKendaraan extends Model
{
    use HasFactory;
    protected $table = 'jenis_kendaraan';

    protected $fillable = [
        'id',
        'nm_jns_kendaraan',
    ];
}