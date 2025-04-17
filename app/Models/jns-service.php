<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jns_service extends Model
{
    use HasFactory;
    protected $table = 'jns_service';

    protected $fillable = [
        'id',
        'jns_service',
        'keterangan',
    ];
    
}