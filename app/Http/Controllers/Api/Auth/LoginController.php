<?php

namespace App\Http\Controllers\Api\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function login(Request $request){
        $response = Http::post('http://localhost/vue-spa/public/oauth/token',[
            'grant_type' => 'password',
            'client_id' => 2,
            'client_secret' => 'Y4QMGYi4WBpBB0DYfhP6Mg2Dpa7aIZWnQaYc5Hne',
            'username' => $request->email,
            'password' => $request->password,
            'scope' => ''
        ]);

        if($response->clientError()){
            return $response->json('error email atau password salah',400);
        }
        elseif($response->serverError()){
            return $response->json('server error',500);
        }

        return $response->body();
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json('user created sucesfully', 200);
    }

    public function logout(){
        
        Auth::user()->tokens->each(function ($token, $key){
            $token->delete();
        });

        return response()->json('log out sucesfully', 200);
    }
}
