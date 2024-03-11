<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventDetailController extends Controller
{
    public function displayEventDetail(){
        return view('User.EventDetail');
    }
}
