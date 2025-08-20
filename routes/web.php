<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PhysiciansController;
use App\Http\Controllers\BoardofDirectorsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/admin/homepageBanner', function () {
        return view('admin.pages.homepageBanner'); // create this blade later
    })->name('homepageBanner');
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
