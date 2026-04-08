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
        $team = User::join('team', 'users.id', '=', 'team.user_id')
                ->get();

        $data=['navbar' => 'ourTeam',
               'team'   => $team];
        return view('ourTeam', compact('data'));
    }

    function bursaSoal(){
        // $bursaSoal = BursaSoal::where('BursaSoal.year', '=', '2025')
        //              ->get();

        // $data=['navbar' => 'ourTeam',
        //        'bursaSoal'   => $bursaSoal];
        return view('ourTeam', compact('data'));
    }
}
