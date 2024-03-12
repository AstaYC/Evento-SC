<?php

namespace App\Http\Controllers\Organizer;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function displayEvent(){
        $events = DB::select('SELECT events.* , users.nom AS username , categories.id AS id_categorie , categories.nom FROM events INNER JOIN categories ON events.categorie_id = categories.id INNER JOIN users on events.user_id = users.id;');
        $categories = Categorie::all();
        return view('Organizer.EventTable' , compact('events' , 'categories'));
    }

    public function addEvent(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'organization' => 'required',
            'description' => 'required',
            'date' => 'required',
            'heure' => 'required',
            'lieu' => 'required',
            'places' => 'required',
            'categorie_id' => 'required',
        ]);
        $data = $request->all();

        if ($request->hasFile('images')) {
            $imageName = $request->file('images')->getClientOriginalName();
            $request->file('images')->move(public_path('img'), $imageName);
            $data['images'] =  $imageName;
        }
    
        $event = new Event;
    
        $event->titre = $data['titre'];
        $event->organization = $data['organization'];
        $event->description = $data['description'];
        $event->images = $data['images'];
        $event->date = $data['date'];
        $event->heure = $data['heure'];
        $event->lieu = $data['lieu'];
        $event->places = $data['places'];
        $event->user_id = session('user_id');
        $event->categorie_id = $data['categorie_id'];
    
        $event->save();
    
        return redirect('/event')->with('status', 'Ajoute Bien Fait !!');
    }
    

    public function updateEvent(Request $request)
    {
       
        $request->validate([
            'titre' => 'required',
            'organization' => 'required',
            'description' => 'required',
            'date' => 'required',
            'heure' => 'required',
            'lieu' => 'required',
            'places' => 'required',
            'categorie_id' => 'required',
        ]);
        $data = $request->all();
        
        if ($request->hasFile('images')) {
            $imageName = $request->file('images')->getClientOriginalName();
            $request->file('images')->move(public_path('img'), $imageName);
            $data['images'] =  $imageName;
        }
        
        $event = Event::find($data['id']);

        $event->titre = $data['titre'];
        $event->organization = $data['organization'];
        $event->description = $data['description'];
        $event->images = $data['images'];
        $event->date = $data['date'];
        $event->heure = $data['heure'];
        $event->lieu = $data['lieu'];
        $event->places = $data['places'];
        $event->categorie_id = $data['categorie_id'];

        $event->update();

        return redirect('/event')->with('status' , 'la modification est bien faite');
    
    }

    public function deleteEvent(Request $request){
        $request->validate([
            'id' => 'required',
        ]);
        $event = Event::find($request->id);
        $event->delete();

        return redirect('/event')->with('status' , 'La Suppression Est Bien Faite');
    }

    public function typeValidation(Request $request){
        $request->validate([
            'id' => 'required',
            'validation' => 'required',
        ]);

        if($request->validation == 'automatic'){
            Event::where('id', $request->id)->update(['type_validation' => 'automatic']);
        }
        else{
            Event::where('id', $request->id)->update(['type_validation' => 'manual']);
        }

        return redirect('/event');
    }

}
