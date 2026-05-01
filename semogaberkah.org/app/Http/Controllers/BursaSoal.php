<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BursaSoal
{
    function soalViewer($soal){
        return view('viewer');
    }
}
