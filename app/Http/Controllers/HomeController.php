<?php

namespace App\Http\Controllers;

use App\User;

class HomeController extends Controller
{
    public function index()
    {
        $poll = 1000;
        return view('app', compact('poll'));
    }
}
