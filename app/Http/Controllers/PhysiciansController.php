<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhysiciansController extends Controller
{
    public function index()
    {
        $physicians = [
            1 => (object) [
                'id' => 1,
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Maria Santiago',
                'specialties' => ['Cardio-Oncology', 'Internal Medicine'],
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
                'about' => "Dr. Maria Santiago is a board-certified internal medicine specialist with over 15 years of experience in cardiology and oncology integration. Based in Manila, Philippines, she is a leading advocate for cardio-oncology education and patient-centered care in Southeast Asia. As an ICS Certified Physician, Dr. Santiago is committed to advancing the understanding and management of cardiovascular health in patients undergoing cancer treatment...",
                'affiliations' => 'Director of Cardio-Oncology European Institute of Oncology'
            ],
            2 => (object) [
                'id' => 2,
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Adrian Sastre',
                'specialties' => ['Cardio-Oncology', 'Internal Medicine'],
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
                'about' => "Dr. Adrian Sastre is a board-certified internal medicine specialist with over 15 years of experience in cardiology and oncology integration. Based in Manila, Philippines, he is a leading advocate for cardio-oncology education and patient-centered care in Southeast Asia. As an ICS Certified Physician, Dr. Sastre is committed to advancing the understanding and management of cardiovascular health in patients undergoing cancer treatment...",
                'affiliations' => 'Director of Cardio-Oncology European Institute of Oncology'
            ],
            3 => (object) [
                'id' => 3,
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Kent Escoto',
                'specialties' => ['Cardio-Oncology', 'Internal Medicine'],
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
                'about' => "Dr. Kent Escoto is a board-certified internal medicine specialist with over 15 years of experience in cardiology and oncology integration. Based in Manila, Philippines, he is a leading advocate for cardio-oncology education and patient-centered care in Southeast Asia. As an ICS Certified Physician, Dr. Escoto is committed to advancing the understanding and management of cardiovascular health in patients undergoing cancer treatment...",
                'affiliations' => 'Director of Cardio-Oncology European Institute of Oncology'
            ],
            4 => (object) [
                'id' => 4,
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Maria Santiago',
                'specialties' => ['Cardio-Oncology', 'Internal Medicine'],
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
                'about' => "Dr. Maria Santiago is a board-certified internal medicine specialist with over 15 years of experience in cardiology and oncology integration. Based in Manila, Philippines, she is a leading advocate for cardio-oncology education and patient-centered care in Southeast Asia. As an ICS Certified Physician, Dr. Santiago is committed to advancing the understanding and management of cardiovascular health in patients undergoing cancer treatment...",
                'affiliations' => 'Director of Cardio-Oncology European Institute of Oncology'
            ],
            5 => (object) [
                'id' => 5,
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Maria Santiago',
                'specialties' => ['Cardio-Oncology', 'Internal Medicine'],
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
                'about' => "Dr. Maria Santiago is a board-certified internal medicine specialist with over 15 years of experience in cardiology and oncology integration. Based in Manila, Philippines, she is a leading advocate for cardio-oncology education and patient-centered care in Southeast Asia. As an ICS Certified Physician, Dr. Santiago is committed to advancing the understanding and management of cardiovascular health in patients undergoing cancer treatment...",
                'affiliations' => 'Director of Cardio-Oncology European Institute of Oncology'
            ],
            6 => (object) [
                'id' => 6,
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Maria Santiago',
                'specialties' => ['Cardio-Oncology', 'Internal Medicine'],
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
                'about' => "Dr. Maria Santiago is a board-certified internal medicine specialist with over 15 years of experience in cardiology and oncology integration. Based in Manila, Philippines, she is a leading advocate for cardio-oncology education and patient-centered care in Southeast Asia. As an ICS Certified Physician, Dr. Santiago is committed to advancing the understanding and management of cardiovascular health in patients undergoing cancer treatment...",
                'affiliations' => 'Director of Cardio-Oncology European Institute of Oncology'
            ],
        ];

        return view('pages.certification.certified_physicians', compact('physicians'));
    }

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
