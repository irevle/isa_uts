<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller;

class MainController extends Controller
{
    function homepage(){
        $data=['navbar' => 'homepage'];
        return view('welcome', compact('data'));
    }

    function ourTeam(){
        $team = User::ourTeam();

        $data=['navbar' => 'ourTeam',
               'team'   => $team];
        return view('ourTeam', compact('data'));
    }
}
