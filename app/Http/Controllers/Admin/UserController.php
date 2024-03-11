<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function displayUser(Request $request){
        $users = DB::table('users')->join('roles','users.role_id','=','roles.id')
                 ->select('users.*','users.id as user_id' , 'users.nom as user_nom', 'roles.nom as role_nom')
                 ->get();
        $roles = Role::all();
        foreach($users as $user){
          $user->password = str_repeat('*', strlen($user->password));
        }
    
        return view('Admin.UserTable', compact('users','roles'));
      } 
        
      public function updateUser(Request $request){
        $request->validate([
            'nom' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'password' => 'required|string|min:6',
            'role_id' => 'required',
        ]);
    
        $user = User::find($request['id']);
        $user->nom = $request->nom;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        $user->update();
    
        return redirect('/user')->with('status' , 'La Modification Du User Est Bien Faite');
      }
    
      public function deleteUser(Request $request){
        $request->validate([
            'id'=> 'required',
        ]);
    
        $user = User::find($request['id']);
        $user->delete();
    
        return redirect('/user')->with('status' , 'La Supprission Est Bien Faite');
      }

}