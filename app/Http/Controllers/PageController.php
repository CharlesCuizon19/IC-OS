<?php

namespace App\Http\Controllers;

use App\Models\banners;
use App\Models\blogs;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //---------------------------------------------- WEBSITE FUNCTIONS
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
            ],
            (object) [
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Adrian Sastre',
                'specialties' => ['Cardio-Oncology', 'Internal Medicine'],
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
            ],
            (object) [
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Kent Escoto',
                'specialties' => ['Cardio-Oncology', 'Internal Medicine'],
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
            ],
            (object) [
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Maria Santiago',
                'specialties' => ['Cardio-Oncology', 'Internal Medicine'],
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
            ],
            (object) [
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Maria Santiago',
                'specialties' => ['Cardio-Oncology', 'Internal Medicine'],
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
            ],
            (object) [
                'image' => 'assets/sample-doctor.png',
                'name' => 'Dr. Maria Santiago',
                'specialties' => ['Cardio-Oncology', 'Internal Medicine'],
                'certified' => true,
                'city' => 'Manila',
                'country' => 'Philippines',
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
                'month' => 'Dec',
                'date' => '23',
                'title' => "Pioneering Awareness: Australia's First Community Q&A on Cardio-Oncology Draws Over 100 Attendees",
                'description' => 'In a groudnbreaking step toward better cancer survivorship care, the Newcastle Center of Excellence in Cardio-Oncology at the Hunter Medical Research Institute recenly hosted...'
            ],
            2 => (object)[
                'image' => 'assets/event2.png',
                'month' => 'Dec',
                'date' => '23',
                'title' =>
                "IC-OS President Susan Dent Stresses The Importance of Cardio-Oncology at ASCO 2025",
                'description' =>
                'In a groudnbreaking step toward better cancer survivorship care, the Newcastle Center of Excellence in Cardio-Oncology at the Hunter Medical Research Institute recenly hosted...',
            ],
            3 => (object)[
                'image' => 'assets/event3.png',
                'month' => 'Dec',
                'date' => '23',
                'title' =>
                "Advancements in Cardio-Oncology: A Vision for Comprehensive Patient Care",
                'description' =>
                'In a groudnbreaking step toward better cancer survivorship care, the Newcastle Center of Excellence in Cardio-Oncology at the Hunter Medical Research Institute recenly hosted...',
            ],
            4 => (object)[
                'image' => 'assets/event4.png',
                'month' => 'Dec',
                'date' => '23',
                'title' =>
                "IC-OS-Ph Takes Flight – A Milestone in Philippine Cardio-Oncology",
                'description' =>
                'In a groudnbreaking step toward better cancer survivorship care, the Newcastle Center of Excellence in Cardio-Oncology at the Hunter Medical Research Institute recenly hosted...',
            ],
            5 => (object)[
                'image' => 'assets/event5.png',
                'month' => 'Dec',
                'date' => '23',
                'title' =>
                "Moscow Cardio-Oncology Initiative in Australia",
                'description' =>
                'In a groudnbreaking step toward better cancer survivorship care, the Newcastle Center of Excellence in Cardio-Oncology at the Hunter Medical Research Institute recenly hosted...',
            ],
            6 => (object)[
                'image' => 'assets/event6.png',
                'month' => 'Dec',
                'date' => '23',
                'title' =>
                "Chinese Medical Association Journal of Cardio-Oncology – Call for Papers",
                'description' =>
                'In a groudnbreaking step toward better cancer survivorship care, the Newcastle Center of Excellence in Cardio-Oncology at the Hunter Medical Research Institute recenly hosted...',
            ],
            7 => (object) [
                'image' => 'assets/blog1.png',
                'month' => 'Dec',
                'date' => '23',
                'title' => 'New Training Program Launched for Local Physicians',
                'description' => 'In a groudnbreaking step toward better cancer survivorship care, the Newcastle Center of Excellence in Cardio-Oncology at the Hunter Medical Research Institute recenly hosted...',
            ],
            8 => (object) [
                'image' => 'assets/blog2.png',
                'month' => 'Dec',
                'date' => '23',
                'title' => 'National Forum on Cancer and Heart Care Held in Manila',
                'description' => 'In a groundbreaking step toward better cancer survivorship care, the Newcastle Center of Excellence in Cardio-Oncology at the Hunter Medical Research Institute recently hosted...',
            ],
            9 => (object) [
                'image' => 'assets/blog3.png',
                'month' => 'Dec',
                'date' => '23',
                'title' => 'ICOS PH Expands Global Ties with Regional Partners',
                'description' => 'In a groundbreaking step toward better cancer survivorship care, the Newcastle Center of Excellence in Cardio-Oncology at the Hunter Medical Research Institute recently hosted...',
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



    //---------------------------------------------- CMS FUNCTIONS----------------------

    //BANNER

    public function cms_createBanner()
    {
        return view('admin.pages.banners.createBanner');
    }
    public function cms_updateBanner($id)
    {
        $banner = banners::with(['images', 'images.files'])->findOrFail($id);
        return view('admin.pages.banners.updateBanner', compact('banner'));
    }

    //BLOG

    public function cms_createBlog()
    {
        return view('admin.pages.blogs.createBlog');
    }
    public function cms_updateBlog($id)
    {
        $blog = blogs::with(['categories', 'images', 'images.files'])->findOrFail($id);
        return view('admin.pages.blogs.updateBlog', compact('blog'));
    }
}
