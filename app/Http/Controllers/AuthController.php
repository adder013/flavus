<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\User;
use Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function logout()
    {
        JWTAuth::invalidate();
        return response([
            'status' => 'success',
            'msg' => 'Logged out Successfully.'
        ], 200);
    }

    public function register(ClientRequest $request)
    {
        if ($request->token_client_id) {
            $client = User::where('id', '=', $request->token_client_id)->first();
        } else {
            $client = new User();
            $request->validate([
                'email' => 'required|email|unique:users,email',
            ]);
        }
        $client->name = $request->name;
        $client->email = $request->email;
        $client->registration_token = null;
        $client->password = bcrypt($request->password);
        $client->save();
        return response([
            'status' => 'success',
            'data' => $client
        ], 200);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (!$token = JWTAuth::attempt($credentials)) {
            return response([
                'status' => 'error',
                'error' => 'invalid.credentials',
                'msg' => 'Invalid Credentials.'
            ], 400);
        }
        return response([
            'status' => 'success'
        ])->header('Authorization', $token);
    }

    public function client(Request $request)
    {
        $client = User::where('id', '=', Auth::guard('api')->user()->id)->with('discountLevel')->first();
        return response([
            'status' => 'success',
            'data' => $client
        ]);
    }

    public function refresh()
    {
        return response([
                'status' => 'success'
        ]);
    }
}
