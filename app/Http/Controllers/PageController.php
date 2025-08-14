<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }

    //homepage
    public function homepage()
    {
        return view('pages/index');
    }

    public function about_company()
    {
        return view('pages/about/about_company');
    }

    public function about_bod()
    {
        return view('pages/about/about_bod');
    }

    public function get_cert()
    {
        return view('pages/certification/certs_getcert');
    }

    public function why_getcert()
    {
        return view('pages/certification/whygetcert');
    }

    public function certified_physicians()
    {

        $physicians = [
            (object) [
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Maria Santiago',
                'specialties' => ['Cardio-Oncology', 'Internal Medicine'],
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
            ],
            (object) [
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Adrian Sastre',
                'specialties' => ['Cardio-Oncology', 'Internal Medicine'],
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
            ],
            (object) [
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Kent Escoto',
                'specialties' => ['Cardio-Oncology', 'Internal Medicine'],
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
            ],
            (object) [
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Maria Santiago',
                'specialties' => ['Cardio-Oncology', 'Internal Medicine'],
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
            ],
            (object) [
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Maria Santiago',
                'specialties' => ['Cardio-Oncology', 'Internal Medicine'],
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
            ],
            (object) [
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Maria Santiago',
                'specialties' => ['Cardio-Oncology', 'Internal Medicine'],
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
                'joined' => 2022,
                'experience' => 15,
            ],
        ];
        return view('pages/certification/certified_physicians', compact('physicians'));
    }

    public function physician()
    {
        return view('pages/certification/physician_profile');
    }

    public function news_and_events()
    {
        $events = [
            1 => (object)[
                'image' => 'assets/event1.png',
                'date' => 'July 26, 2025',
                'title' => "Pioneering Awareness: Australia's First Community Q&A on Cardio-Oncology Draws Over 100 Attendees",
                'description' => 'In a groudnbreaking step toward better cancer survivorship care, the Newcastle Center of Excellence in Cardio-Oncology at the Hunter Medical Research Institute recenly hosted...'
            ],
            2 => (object)[
                'image' => 'assets/event2.png',
                'date' => 'July 26, 2025',
                'title' =>
                "IC-OS President Susan Dent Stresses The Importance of Cardio-Oncology at ASCO 2025",
                'description' =>
                'In a groudnbreaking step toward better cancer survivorship care, the Newcastle Center of Excellence in Cardio-Oncology at the Hunter Medical Research Institute recenly hosted...',
            ],
            3 => (object)[
                'image' => 'assets/event3.png',
                'date' => 'July 26, 2025',
                'title' =>
                "Advancements in Cardio-Oncology: A Vision for Comprehensive Patient Care",
                'description' =>
                'In a groudnbreaking step toward better cancer survivorship care, the Newcastle Center of Excellence in Cardio-Oncology at the Hunter Medical Research Institute recenly hosted...',
            ],
            4 => (object)[
                'image' => 'assets/event4.png',
                'date' => 'July 26, 2025',
                'title' =>
                "IC-OS-Ph Takes Flight – A Milestone in Philippine Cardio-Oncology",
                'description' =>
                'In a groudnbreaking step toward better cancer survivorship care, the Newcastle Center of Excellence in Cardio-Oncology at the Hunter Medical Research Institute recenly hosted...',
            ],
            5 => (object)[
                'image' => 'assets/event5.png',
                'date' => 'July 26, 2025',
                'title' =>
                "Moscow Cardio-Oncology Initiative in Australia",
                'description' =>
                'In a groudnbreaking step toward better cancer survivorship care, the Newcastle Center of Excellence in Cardio-Oncology at the Hunter Medical Research Institute recenly hosted...',
            ],
            6 => (object)[
                'image' => 'assets/event6.png',
                'date' => 'July 26, 2025',
                'title' =>
                "Chinese Medical Association Journal of Cardio-Oncology – Call for Papers",
                'description' =>
                'In a groudnbreaking step toward better cancer survivorship care, the Newcastle Center of Excellence in Cardio-Oncology at the Hunter Medical Research Institute recenly hosted...',
            ],
        ];

        return view('pages/news_events', compact('events'));
    }

    public function resources()
    {
        return view('pages/resources');
    }

    public function contact_us()
    {
        return view('pages/contact_us');
    }
    public function test()
    {
        return view('components/partners');
    }
}
