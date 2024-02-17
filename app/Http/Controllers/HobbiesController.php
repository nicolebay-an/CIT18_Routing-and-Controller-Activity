<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{public function index()
    {
        $hobbies = ["Fitness", "Instruments", "Photography", "Gaming", "Editing"];
        return view('hobbies', compact('hobbies'));
    }    

}
