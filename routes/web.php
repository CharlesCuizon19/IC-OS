<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PhysiciansController;
use App\Http\Controllers\BoardofDirectorsController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    // CMS Page routes (just return Blade views)
    Route::get('/admin/homepageBanner/createbanner', [PageController::class, 'cms_createBanner'])->name('cms.homepagebanner');
    Route::get('/admin/homepageBanner/updatebanner/{id}', [PageController::class, 'cms_updateBanner'])->name('cms.homepagebannerUpdate');

    Route::get('/admin/blogs/createblog', [PageController::class, 'cms_createBlog'])->name('cms.createBlog');
    Route::get('/admin/blogs/updateblog/{id}', [PageController::class, 'cms_updateBlog'])->name('cms.updateBlog');

    Route::get('/admin/doctors/createdoctor', [PageController::class, 'cms_createDoctor'])->name('cms.createDoctor');
    Route::get('/admin/doctors/updatedoctor/{id}', [PageController::class, 'cms_updateDoctor'])->name('cms.updateDoctor');

    // Banner CRUD routes
    Route::get('/admin/homepageBanner', [BannersController::class, 'index'])->name('show.homepageBanner');
    Route::post('/admin/homepageBanner', [BannersController::class, 'store'])->name('store.homepageBanner');
    Route::put('/admin/homepageBanner/{id}', [BannersController::class, 'update'])->name('update.homepageBanner');
    Route::delete('/admin/homepageBanner/{id}', [BannersController::class, 'destroy'])->name('delete.homepageBanner');

    // Blog CRUD routes
    Route::get('/admin/blogs', [BlogsController::class, 'index'])->name('show.blogs');
    Route::post('/admin/blogs/createBlog', [BlogsController::class, 'store'])->name('store.blog');
    Route::put('/admin/blogs/updateBlog/{id}', [BlogsController::class, 'update'])->name('update.blog');
    Route::delete('/admin/blogs/{id}', [BlogsController::class, 'destroy'])->name('delete.blog');

    // Doctor CRUD routes
    Route::get('/admin/doctors', [DoctorsController::class, 'index'])->name('show.doctors');
    Route::post('/admin/doctors', [DoctorsController::class, 'store'])->name('store.doctor');
    Route::put('/admin/doctors/{id}', [DoctorsController::class, 'update'])->name('update.doctor');
    Route::delete('/admin/doctors/{id}', [DoctorsController::class, 'destroy'])->name('delete.doctor');

    // Messages
    Route::get('/admin/messages', [ContactController::class, 'index'])->name('show.messages');
    Route::post('/admin/messages', [ContactController::class, 'store'])->name('store.message');
    Route::delete('/admin/messages/{id}', [ContactController::class, 'destroy'])->name('delete.message');
});


// ================== PAGES ROUTE ================== //
Route::get('/', [PageController::class, 'homepage'])->name('homepage');

// Abouts
Route::get('/abouts/about-company', [PageController::class, 'about_company'])->name('about-company');
Route::get('/abouts/board-of-directors', [BoardofDirectorsController::class, 'index'])->name('about-bod');

// Certificates
Route::get('/certificates/get-certified', [PageController::class, 'get_cert'])->name('get-certified');
Route::get('/certificates/why-getcertified', [PageController::class, 'why_getcert'])->name('why-getcert');
Route::get('/certificates/certified-physicians', [PageController::class, 'certified_physicians'])->name('certified-physicians');
Route::get('/certificates/certified-physicians/physician/{id}', [PhysiciansController::class, 'show'])->name('certified-physician');

// News & Events
Route::get('/newsandevents', [PageController::class, 'news_and_events'])->name('news-and-events');
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');

// Resources & Contact
Route::get('/resources', [PageController::class, 'resources'])->name('resources');
Route::get('/contactus', [PageController::class, 'contact_us'])->name('contact-us');











// require __DIR__ . '/auth.php';
