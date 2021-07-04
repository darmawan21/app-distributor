<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operasional extends Model
{
    use HasFactory;
    
    public $table = "operasional";

    protected $fillable = [
        'keterangan',
        'biaya',
        'tanggal',
    ];

    protected $hidden = [

    ];
}
