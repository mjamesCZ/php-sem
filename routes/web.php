<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VenueController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Show homepage
Route::get('/', function () {
    return view('index');
})->name('home');

/*
| Event listings
|--------------------------------------------------------------------------
*/

// Show all events
Route::get('/events', [EventController::class, 'index'])->name('events');

// Show single event
Route::get('/events/{event}', [EventController::class, 'show']);

/*
| Venue listings
|--------------------------------------------------------------------------
*/

// Show all listings
Route::get('/venues', [VenueController::class, 'index'])->name('venues');

/*
| Artist listings
|--------------------------------------------------------------------------
*/

// Show all listings
Route::get('/artists', [ArtistController::class, 'index'])->name('artists');
