<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Category;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Fetch data for dashboard
        $userCount = User::count();
        $doctorCount = Doctor::count();
        $appointmentsToday = Category::whereDate('date', now()->toDateString())->count();

        // Pass data to the view
        return view('admin.dashboard', [
            'userCount' => $userCount,
            'doctorCount' => $doctorCount,
            'appointmentsToday' => $appointmentsToday,
        ]);
    }
}
