<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use DB;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {

            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['token' => $token, 'success' => 'true',  'user' => $user];
                return response($response, 200);
                
            }
            else {
                $response = ["errors" => "Пароль невереный", 'success' => 'false'];
                return response($response, 422);
    
        }

    }
    else {
        $response = ["errors" =>'Пользователя с таким Email не найден', 'success' => 'false'];
        return response($response, 422);
    }
    }

    public function register()
{
    User::create([
        'name' => request('name'),
        'email' => request('email'),
        'tel' => request('tel'),
        'password' => bcrypt(request('password'))
    ]);

    return response()->json(['status' => 201]);
}

public function logout() {
    // // $request->user()->token()->revoke();

    // return response()->json([
    //    'message' => 'Successfully logged out'
    // ]);
    } 

}
