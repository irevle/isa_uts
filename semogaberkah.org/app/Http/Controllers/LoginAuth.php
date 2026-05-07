<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

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
            $password   = Hash::make($req->input('password'));
            
            if(User::where('username', $username)->first() || User::where('email', $email)->first()){
                return response()->json(['err' => 'Data username dan email tidak bole kembar']);
            }
            
            $user = new User();
                $user->username  = $username;
                $user->full_name = Crypt::encrypt($fullName);
                $user->password  = $password;
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
        }else if(!$req->has('login_data')){
            return response()->json(['err' => 'Data Username / email kosong!'], 400);
        }

        try{
            $dataUser = $req->input('login_data');

            if(filter_var($req->input('login_data'), FILTER_VALIDATE_EMAIL)){

            }else{
                $user = User::where('username', $dataUser)->first();
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
