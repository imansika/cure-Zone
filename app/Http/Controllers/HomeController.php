<?php

namespace App\Http\Controllers;
use App\Models\doctor;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $doctors = Doctor::all();  // Fetch all doctors

        return view('user.home', compact('doctors')); 
        // return view('user.home');
    }

    public function redirect()
    {
        return view('user.home'); // This renders the user home page
    }
}
