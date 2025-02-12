<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the portfolio homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }
}
