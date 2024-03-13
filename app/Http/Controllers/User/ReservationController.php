<?php

namespace App\Http\Controllers\User;

use App\Models\Reservation;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;    

class ReservationController extends Controller
{
    /**'manuel','automatic'
     * 'pending','approved','rejected'
     * Display a listing of the resource.
     */
    public function addRereservation (Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]
        );
       $user_id = session('user_id');
       $event_id = $request->id;
       $event = Event::find($event_id) ; 
       $type_reservation =  $event->type_validation;
    
       $reservation  = new Reservation();
       $reservation->event_id =  $event_id;
       $reservation->user_id =  $user_id;

        if($event->places > 0){
            if($type_reservation === 'automatic'){
                    $reservation->status = 'accepted' ;
                    $reserved =  $reservation->save();
                    if($reserved){
                        $event->places  = $event->places - 1; 
                        $event->save(); }
            }else{
                    $reservation->status = 'pending' ;
                    $reservation->save();
            }
        }else{
            return back()->with('status' , 'Tout Les places SOnt Reservé , A la prochaine Fois Incha2lah !!');
        }

        return back()->with('status' , 'La reservation Bien Faite !!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function DisplayReservation()
    {
      $reservations = DB::select("SELECT reservations.* , users.nom AS user_name , events.titre FROM reservations INNER JOIN users On reservations.user_id = users.id INNER JOIN events ON reservations.event_id = events.id WHERE reservations.status = 'pending';");
        return view('Organizer.ReservationValidation' , compact('reservations'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function acceptReservation(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'status' =>'required'
        ]);

        $reservation = Reservation::find($request->id);

      
       $event = Event::find($reservation->event_id);
 

        if (!$reservation) {
            return back()->with('status' , 'La Reservation Ne trouve pas !!');
        }

        if($request->status === 'accepted'){
            $reservation->status = 'accepted' ;
                    $reserved =  $reservation->save();
                    if($reserved){
                        $event->places  = $event->places - 1; 
                        $event->save(); 
                        return back()->with('status' , 'le Ticket est accepté avec succes');
                    }
        }else if($request->status === 'rejected'){
            $reservation->status = 'rejected';
            $reservation->save();
            return back()->with('status' , 'le Ticket est rejeté avec succes');
        }
       
    }


 
}