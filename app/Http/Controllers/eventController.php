<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventController extends Controller
{
    public function displayEvent(){
        return view('User.Event');
    }

}
