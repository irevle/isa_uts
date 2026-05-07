<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginAuth
{
    function regist(Request $req) { 
        $data = [];
        if(!$req->has('username') && !$req->has('password')){
            return response()->json(['err' => 'Data username atau password tidak masuk!'], 400);
        }
        try {
            $username   = $req->input('username');
            $fullName   = $req->input('fullName');
            $email      = $req->input('email');
            $passwordSalt = Hash::make($req->input('password'));
            
            if(User::where('username', $username)->first() || User::where('email', $email)->first()){
                return response()->json(['err' => 'Data username dan email tidak bole kembar']);
            }
            
            $user = new User();
                $user->username  = $username;
                $user->full_name = $fullName;
                $user->password  = $passwordSalt;
                $user->email     = $email;
                $user->status    = 1;
            $user->save();
            
            $data = [
                "status"   => 'success',
                "dataUser" => $user 
            ];
        } catch (Exception $ex) { 
            $data = [
                'err' => $ex->getMessage() 
            ];
        }
        return response()->json($data);
    }

    function login(Request $req){
        if(!$req->has('password')){
            return response()->json(['err' => 'Data password kosong!'], 400);
        }
        try{
            if($req->has('username')){
                $user = User::where('username', $req->input('username'))->first();
            }else if($req->has('email')){
                $user = User::where('email', $req->input('email'))->first();
            }else{
                return response()->json(['err' => 'Data username/email tidak ada!'], 400);
            }

            $passwordCheck = Hash::check($req->input('password'), $user->password);
            if($passwordCheck){
                $req->session()->put('username', $user->username);
                $req->session()->regenerate();
            }
            
            $data = [
                'status'       => $passwordCheck,
                'data_session' => $req->session()->all()
            ]; 
        }catch(Exception $ex){
            $data = ['err' => $ex->getMessage()];
        }
        return response()->json($data);
    }
}
