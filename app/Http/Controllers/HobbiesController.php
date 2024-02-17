<?php

// app/Http/Controllers/HobbiesController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{public function index()
    {
        $hobbiesData = ["Fitness", "Instruments", "Photography", "Gaming", "Editing"
        ];

        return view('hobbies', compact('hobbiesData'));
    }    

}
