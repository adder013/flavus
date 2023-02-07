<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ClientRequest;
use App\User;

class ClientController extends ProfileController
{
    public function preRegisteredClient($token)
    {
        $client = User::where('registration_token', '=', $token)->with('discountLevel')->first();
        return response()->json($client, 200);
    }

    public function create(ClientRequest $request)
    {
        $client = new User();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->password = bcrypt($request->password);
        $client->save();
        $client = User::where('id', '=', $client->id)->with('discountLevel')->first();
        return response()->json($client, 200);
    }

    public function update(ClientRequest $request, User $client)
    {
        $client = User::where('id', '=', $client->id)->with('discountLevel')->first();
        if (!empty($request->password) && $request->password != 'undefined') {
            $client->password = bcrypt($request->password);
        }
        $client->update($request->except('password'));
        return response()->json($client, 200);
    }

    public function delete(User $client)
    {
        $client->delete();
        return response()->json(null, 204);
    }
}
