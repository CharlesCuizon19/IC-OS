<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PhysiciansController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// PAGES ROUTE
Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/abouts/about-company', [PageController::class, 'about_company'])->name('about-company');
Route::get('/abouts/board-of-directors', [PageController::class, 'about_bod'])->name('about-bod');
Route::get('/certificates/get-certified', [PageController::class, 'get_cert'])->name('get-certified');
Route::get('/certificates/why-getcertified', [PageController::class, 'why_getcert'])->name('why-getcert');
Route::get('/certificates/certified-physicians', [PageController::class, 'certified_physicians'])->name('certified-physicians');
Route::get('/newsandevents', [PageController::class, 'news_and_events'])->name('news-and-events');
Route::get('/resources', [PageController::class, 'resources'])->name('resources');
Route::get('/contactus', [PageController::class, 'contact_us'])->name('contact-us');






Route::get('/certificates/certified-physicians/physician/{id}', [PhysiciansController::class, 'show'])->name('certified-physician');
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');



// require __DIR__ . '/auth.php';
