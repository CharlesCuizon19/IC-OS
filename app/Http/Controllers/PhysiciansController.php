<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhysiciansController extends Controller
{
    public function show($id)
    {
        $physicians = [
            1 => (object) [
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Maria Santiago',
                'specialties' => 'Cardio-Oncology, Internal Medicine',
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
                'about' => "Dr. Maria Santiago is a board-certified internal medicine specialist with over 15 years of experience in cardiology and oncology integration. Based in Manila, Philippines, she is a leading advocate for cardio-oncology education and patient-centered care in Southeast Asia. As an ICS Certified Physician, Dr. Santiago is committed to advancing the understanding and management of cardiovascular health in patients undergoing cancer treatment...",
                'affiliations' => 'Director of Cardio-Oncology European Institute of Oncology'
            ],
            2 => (object) [
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Adrian Sastre',
                'specialties' => 'Cardio-Oncology, Internal Medicine',
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
                'about' => "Dr. Maria Santiago is a board-certified internal medicine specialist with over 15 years of experience in cardiology and oncology integration. Based in Manila, Philippines, she is a leading advocate for cardio-oncology education and patient-centered care in Southeast Asia. As an ICS Certified Physician, Dr. Santiago is committed to advancing the understanding and management of cardiovascular health in patients undergoing cancer treatment...",
                'affiliations' => 'Director of Cardio-Oncology European Institute of Oncology'
            ],
            3 => (object) [
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Kent Escoto',
                'specialties' => 'Cardio-Oncology, Internal Medicine',
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
                'about' => "Dr. Maria Santiago is a board-certified internal medicine specialist with over 15 years of experience in cardiology and oncology integration. Based in Manila, Philippines, she is a leading advocate for cardio-oncology education and patient-centered care in Southeast Asia. As an ICS Certified Physician, Dr. Santiago is committed to advancing the understanding and management of cardiovascular health in patients undergoing cancer treatment...",
                'affiliations' => 'Director of Cardio-Oncology European Institute of Oncology'
            ],
            4 => (object) [
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Maria Santiago',
                'specialties' => 'Cardio-Oncology, Internal Medicine',
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
                'about' => "Dr. Maria Santiago is a board-certified internal medicine specialist with over 15 years of experience in cardiology and oncology integration. Based in Manila, Philippines, she is a leading advocate for cardio-oncology education and patient-centered care in Southeast Asia. As an ICS Certified Physician, Dr. Santiago is committed to advancing the understanding and management of cardiovascular health in patients undergoing cancer treatment...",
                'affiliations' => 'Director of Cardio-Oncology European Institute of Oncology'
            ],
            5 => (object) [
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Maria Santiago',
                'specialties' => 'Cardio-Oncology, Internal Medicine',
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
                'about' => "Dr. Maria Santiago is a board-certified internal medicine specialist with over 15 years of experience in cardiology and oncology integration. Based in Manila, Philippines, she is a leading advocate for cardio-oncology education and patient-centered care in Southeast Asia. As an ICS Certified Physician, Dr. Santiago is committed to advancing the understanding and management of cardiovascular health in patients undergoing cancer treatment...",
                'affiliations' => 'Director of Cardio-Oncology European Institute of Oncology'
            ],
            6 => (object) [
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Maria Santiago',
                'specialties' => "Cardio-Oncology, Internal Medicine",
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
                'about' => "Dr. Maria Santiago is a board-certified internal medicine specialist with over 15 years of experience in cardiology and oncology integration. Based in Manila, Philippines, she is a leading advocate for cardio-oncology education and patient-centered care in Southeast Asia. As an ICS Certified Physician, Dr. Santiago is committed to advancing the understanding and management of cardiovascular health in patients undergoing cancer treatment...",
                'affiliations' => 'Director of Cardio-Oncology European Institute of Oncology'
            ],
        ];

        $physician = $physicians[$id] ?? abort(404);

        return view('pages.certification.physician_profile', compact('physician'));
    }
}
