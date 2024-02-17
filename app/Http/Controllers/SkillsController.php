<?php

// app/Http/Controllers/SkillsController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $skillsData = [
            'A bit of Developing App (Android Studio)',
            'Programming but not that much (Java, Python)',
            'Laravel, PHP, Javascript (but still learning from those',
            'Editing & Design: Photos & Videos',
        ];

        return view('skills', compact('skillsData'));
    }
}


