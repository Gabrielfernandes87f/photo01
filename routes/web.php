<?php

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
// use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\TestimonialController;


Route::get('/', [EventController::class, 'index'])->name('home');
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');

Route::get('/contact', function () {

    return view('contact');
});

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');

Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');


Route::resource('testimonials', TestimonialController::class)->only([
    'index', 'edit', 'show', 'create', 'store', 'update', 'destroy'
]);


Route::resource('albums', AlbumController::class)->only([
    'index', 'edit', 'show', 'create', 'store', 'update', 'destroy'
]);

Route::resource('image', ImageController::class)->only([
    'index', 'dashboard', 'edit', 'show', 'create', 'store', 'update', 'destroy'
]);

Route::resource('albums/cart/dashboard', AlbumController::class)->only(['dashboard']);


Route::get('/eu', function () {
    return view('eu');
});