<?php

// app/Http/Controllers/AboutMeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $aboutMeData = [
            'name' => 'Nicole Bay-an',
            'bio' => 'I am a web developer passionate about Laravel.',
        ];

        return view('about-me', compact('aboutMeData'));
    }
}

