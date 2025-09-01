<?php

namespace App\Http\Controllers;

use App\Models\banners;
use App\Models\blogs;
use App\Models\doctors;
use App\Models\User;
use App\Models\user_roles;

class PageController extends Controller
{
    //---------------------------------------------- WEBSITE FUNCTIONS
    public function homepage()
    {
        $banners = banners::with(['images', 'images.files'])->get();
        $events = blogs::with(['categories', 'images', 'images.files'])->get();

        $events = $events->sortBy('date_issued')->take(3);

        return view('pages/index', compact('banners', 'events'));
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

        $doctors = doctors::with('User', 'specializations', 'doctor_institutions.institutions', 'User.profiles', 'User.profiles.cities', 'User.profiles.cities.countries', 'User.profiles.images', 'User.profiles.images.files')->get();
        return view('pages/certification/certified_physicians', compact('doctors'));
    }

    public function physician()
    {
        return view('pages/certification/physician_profile');
    }

    public function news_and_events()
    {
        $blogs = blogs::with(['categories', 'images', 'images.files'])->get();

        $blogs = $blogs->sortBy('date_issued')->values();

        return view('pages/news_events', compact('blogs'));
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


    //BLOG

    public function cms_createDoctor()
    {
        $usercount = User::all()->count();
        $nextuser = $usercount + 1;

        return view('admin.pages.doctors.createDoctor', compact('nextuser'));
    }
    public function cms_updateDoctor($id)
    {
        $doctor = doctors::with('User.profiles', 'specializations', 'doctor_institutions.institutions', 'User.profiles.images.files')->findOrFail($id);

        return view('admin.pages.doctors.updateDoctor', compact('doctor'));
    }


    public function cms_createUser()
    {
        return view('admin.pages.UserManagement.AddUser');
    }
    public function cms_updateUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.pages.UserManagement.updateUser', compact('user'));
    }
}
