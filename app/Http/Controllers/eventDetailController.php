<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventDetailController extends Controller
{
    public function displayEventDetail(){
        return view('User.EventDetail');
    }
}
