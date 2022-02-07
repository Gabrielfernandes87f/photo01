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

 // Route::group(['middleware' => 'admin']), (function () {
 //
 //     Route::get('/admin', [AdminController::class, 'adminindexAdmin']);
 //     Route::get('/admin/events/create', [AdminController::class, 'createAdmin']);
 //     Route::get('/admin/events/{id}', [AdminController::class, 'showAdmin']);
 //     Route::post('/admin/events', [AdminController::class, 'storeAdmin']);
 //     Route::delete('/admin/events/{id}', [AdminController::class, 'destroyAdmin']);
 //     Route::get('/admin/events/edit/{id}', [AdminController::class, 'editAdmin']);
 //     Route::put('/admin/events/update/{id}', [AdminController::class, 'updateAdmin']);
 // });
 //
 //
// Route::resource(name: 'testimonial', controller: TestimonialController::class)->only(['index', 'show', 'create', 'store']->middleware('auth'));
 //


 // Route::get('/testimonial/create', [TestimonialController::class, 'create'])->middleware('auth');
 // Route::get('/testimonial/{id}', [TestimonialController::class, 'show']);
 // Route::post('/testimonial', [TestimonialController::class, 'store']);


Route::get('/contact', function () {

    return view('contact');
});

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');

Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');

// Route::resource(name: 'albums', controller: 'AlbumController')->only(['index', 'create', 'store'])->middleware('auth');

//Route::resource(name: 'album',controller: AlbumController::class)->only(['index', 'show', 'store'])->middleware('auth');

/* Route::group(['middleware' => ['auth']], function () {

    Route::get('/albums/index', [AlbumController::class, 'index']);
    Route::post('/albums/form', [AlbumController::class, 'store']);
    Route::get('/albums/create', [AlbumController::class, 'create']);
    Route::get('/albums/{id}', [AlbumController::class, 'show']);
    Route::delete('/albums/{id}', [AlbumController::class, 'destroy']);
    Route::get('/albums/edit/{id}', [AlbumController::class, 'edit']);
    Route::put('/albums/update/{id}', [AlbumController::class, 'update']);
});

 */

 // Route::get('/depoimentos/create', [DepoimentoController::class, 'createDepoimento'])->middleware('auth');

//  Route::get('/testimonial', [TestimonialController::class, 'store']);
/* Route::group(['middleware' => ['auth']], function () {

    Route::post('/testimonials', [TestimonialController::class, 'store']);
    Route::get('/testimonials/create', [TestimonialController::class, 'create']);
    Route::get('/testimonials/{id}', [TestimonialController::class, 'show']);
}); */


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
