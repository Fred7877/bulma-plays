<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\GamerRegistrerRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    /**
     * Create a new user instance after a valid registration.
     *
     * @param GamerRegistrerRequest $request
     * @return \App\Models\User
     */
    public function create(GamerRegistrerRequest $request)
    {
        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        $user->assignRole('user');

        return $user;
    }
}
