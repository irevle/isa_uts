<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BursaSoal extends Model
{
    protected $fillable = [
        'matkul_id',
        'uploaded_by',
        'tahun',
        'tipe'
    ];
}
