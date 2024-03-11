<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventValidationController extends Controller
{
    public function displayEventValidation(){
        $events = DB::select("SELECT events.* , users.nom AS username , categories.id AS id_categorie , categories.nom FROM events INNER JOIN categories ON events.categorie_id = categories.id INNER JOIN users on events.user_id = users.id WHERE status = 'pending';");
        return view('Admin.EventValidation' , compact('events'));
    }

    public function validerEvent(Request $request){
        $request->validate([
            'id' => 'required'
        ]);

        Event::where('id', $request->id)->update(['status' => 'accepted']);
        return redirect('/eventValidation');
    }
}