<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatistiqueController extends Controller
{
    public function displayStatistique(){
        $user_id = session('user_id');
        $events = DB::select("SELECT COUNT(*) AS total FROM events Where user_id = $user_id");
        return view('Organizer.Statistique' , compact('events'));
    }
}