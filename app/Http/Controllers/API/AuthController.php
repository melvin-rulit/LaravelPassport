<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AuthController extends Controller
{
    public function login()
    {
        // $client = DB::table('oauth_clients');
    
        // $data = [
        //     'grant_type' => 'password',
        //     'client_id' => $client->id,
        //     'client_secret' => $client->secret,
        //     'username' => request('username'),
        //     'password' => request('password'),
        // ];
    
        // $request = Request::create('/oauth/token', 'POST', $data);
    
        // return app()->handle($request);

        // return $client;

        $response = ['success' => $client];
        return response($response, 422);
    }
}
