<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventDetailController extends Controller
{
    public function displayEventDetail($id){    

        $events = DB::select("SELECT events.* , users.nom AS username , categories.id AS id_categorie , categories.nom FROM events INNER JOIN categories ON events.categorie_id = categories.id INNER JOIN users on events.user_id = users.id WHERE events.id =$id ;");
        // dd($events);
        if (!$events) {
            return redirect()->route('page_404'); 
        }
        return view('User.EventDetail' , compact('events'));
    }   
}
