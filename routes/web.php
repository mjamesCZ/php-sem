<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VenueController;
use App\Models\Artist;
use App\Models\Event;
use App\Models\Venue;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

if (App::environment('production')) {
    URL::forceScheme('https');
}

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

// Show admin panel
Route::get('/admin', function () {
    return view('admin.index', [
        'events' => Event::all(),
        'venues' => Venue::all(),
        'artists' => Artist::all(),
    ]);
})->middleware('auth')->name('admin');

/*
| Event listings
|--------------------------------------------------------------------------
*/

// Show all events
Route::get('/events', [EventController::class, 'index'])->name('events');

// Show create event form
Route::get('/events/create', [EventController::class, 'create']);

// Store created event
Route::post('/events', [EventController::class, 'store']);

// Show edit form
Route::get('/events/{event}/edit', [EventController::class, 'edit']);

// Update event
Route::put('/events/{event}', [EventController::class, 'update']);

// Delete event
Route::delete('/events/{event}', [EventController::class, 'destroy']);

// Show single event
Route::get('/events/{event}', [EventController::class, 'show']);

/*
| Venue listings
|--------------------------------------------------------------------------
*/

// Show all venues
Route::get('/venues', [VenueController::class, 'index'])->name('venues');

// Show create venue form
Route::get('/venues/create', [VenueController::class, 'create']);

// Store created venue
Route::post('/venues', [VenueController::class, 'store']);

// Show edit form
Route::get('/venues/{venue}/edit', [VenueController::class, 'edit']);

// Update venue
Route::put('/venues/{venue}', [VenueController::class, 'update']);

// Delete venue
Route::delete('/venues/{venue}', [VenueController::class, 'destroy']);

// Show single venue
Route::get('/venues/{venue}', [VenueController::class, 'show']);

/*
| Artist listings
|--------------------------------------------------------------------------
*/

// Show all artists
Route::get('/artists', [ArtistController::class, 'index'])->name('artists');

// Show create artist form
Route::get('/artists/create', [ArtistController::class, 'create']);

// Store created artist
Route::post('/artists', [ArtistController::class, 'store']);

// Show edit form
Route::get('/artists/{artist}/edit', [ArtistController::class, 'edit']);

// Update artist
Route::put('/artists/{artist}', [ArtistController::class, 'update']);

// Delete artist
Route::delete('/artists/{artist}', [ArtistController::class, 'destroy']);

// Show single artist
Route::get('/artists/{artist}', [ArtistController::class, 'show']);

/*
| Auth routes
|--------------------------------------------------------------------------
*/

// Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create user account
Route::post('/users', [UserController::class, 'store']);

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log user in
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// GitHub redirect
Route::get('/auth/redirect', [OAuthController::class, 'handleRedirect']);

// GitHub callback
Route::get('/auth/callback', [OAuthController::class, 'handleCallback']);
