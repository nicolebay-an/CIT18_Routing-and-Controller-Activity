<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
{
    return view('about-me', ['name' => 'John Doe', 'bio' => 'I love programming!']);
}

}


