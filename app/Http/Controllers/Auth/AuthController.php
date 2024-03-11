<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Firebase\JWT\JWT;

class AuthController extends Controller
{
    public function displayLogin(){
        return view('Auth.login');
    }

    public function displayRegister(){
        return view('Auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|confirmed',
        ]);
        $user = new User();
        $user->nom = $request->input('nom');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = '3';
        $user->save();

        if($user){
            
            return redirect('/login')->with('status', 'lajoutage est bien faite');
        }else{
            return redirect('/login')->with('status', 'Une probleme dans la registration');
        }

    }
    
    public function login(Request $request){

        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        
        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password , $user->password)){
                return back()->with('error',"l' Email Ou Le Mot De Passe est incorrect");
        }
    
        return redirect('/');

    }
}