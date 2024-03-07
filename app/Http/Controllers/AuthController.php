<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function displayLogin(){
        return view('Auth.login');
    }

    public function displayRegister(){
        return view('Auth.register');
    }


    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $valisateData['role_id'] = '3';

        $user = User::create($validatedData);

        $token = $this->createJwtToken($user->id);

        // return response()->json(['user' => $user, 'token' => $token], 201);
        return redirect()->route('newsletter.index')->cookie('jwt', $token, 60);
    }

}
