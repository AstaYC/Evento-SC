<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(){
        $events = DB::select("SELECT events.* , users.nom AS username , categories.id AS id_categorie , categories.nom FROM events INNER JOIN categories ON events.categorie_id = categories.id INNER JOIN users on events.user_id = users.id where status = 'accepted';");
        return view('User.Home' , compact('events'));
    }}
