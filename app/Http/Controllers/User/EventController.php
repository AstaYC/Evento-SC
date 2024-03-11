<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function displayEvent(){
        $event = DB::select('SELECT events.*, categories.id AS id_categorie FROM events INNER JOIN categories ON events.categorie_id = categories.id; ');
        return view('User.Event' , compact('event'));
    }}
