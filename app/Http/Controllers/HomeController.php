<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = ['message' => 'Hello, Chandan G'];
        return view('pages.home', $data);   // Pass data to the view
    }
}
