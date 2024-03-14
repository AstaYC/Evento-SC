<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisatiqueController extends Controller
{
    public function displayStatistique(){
        $events = DB::select("SELECT COUNT(*) AS total FROM events");
        $categories = DB::select("SELECT COUNT(*) AS total FROM categories");
        $users = DB::select("SELECT COUNT(*) AS total FROM users");
        return view('Admin.Statistique' , compact('events' , 'categories' , 'users'));
    }
}