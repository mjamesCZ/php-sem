<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OAuthController;
use App\Http\Controllers\UserController;
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

// Show all venues
Route::get('/venues', [VenueController::class, 'index'])->name('venues');

// Show single venue
Route::get('/venues/{venue}', [VenueController::class, 'show']);

/*
| Artist listings
|--------------------------------------------------------------------------
*/

// Show all artists
Route::get('/artists', [ArtistController::class, 'index'])->name('artists');

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

/// GitHub OAuth routes */
Route::get('/auth/redirect', [OAuthController::class, 'handleRedirect']);
Route::get('/auth/callback', [OAuthController::class, 'handleCallback']);
