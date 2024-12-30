<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::paginate(10);

        return view('doctor.index', [
            'doctors' => $doctors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctor.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate incoming request data
    $request->validate([
        'name' => 'required|string|max:255',
        'contact' => 'nullable|numeric|digits_between:1,10', // Ensures contact is numeric and between 1-10 digits
        'email' => 'required|string|email|max:255', // Ensures email is valid and within length
        'specialty' => 'required|string|max:50', // Specialty is required
        
    ]);

    

    // Create a new doctor record in the database
    Doctor::create([
        'name' => $request->name,
        'contact' => $request->contact,
        'email' => $request->email,
        'specialty' => $request->specialty,
    
    ]);

    // Redirect back to the doctors list with a success message
    return redirect('/doctor')->with('status', 'Doctor Added Successfully');
}


    /**
     * Display the specified resource.
     */
    public function show(doctor $doctor)
    {
        return view('doctor.show');
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(doctor $doctor)
    {
        return view('doctor.edit');
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doctor $doctor)
    {
        $doctor->delete();
        return redirect('/doctor')->with('status', 'Doctor Removed Successfully');
    }
}
