<?php

namespace App\Http\Controllers;

use App\Models\doctors;
use Illuminate\Http\Request;

class PhysiciansController extends Controller
{
    public function index()
    {
        $doctors = doctors::with('User', 'specializations', 'doctor_institutions.institutions', 'User.profiles', 'User.profiles.images', 'User.profiles.images.files')->get();

        return view('pages.certification.certified_physicians', compact('doctors'));
    }

    public function show($id)
    {
        $doctor = doctors::with('User', 'specializations', 'doctor_institutions.institutions', 'User.profiles', 'User.profiles.images', 'User.profiles.images.files')->findOrFail($id);

        return view('pages.certification.physician_profile', compact('doctor'));
    }
}
