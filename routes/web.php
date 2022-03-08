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

Route::get('/', function () {
    return view('website.index-2');
});

Route::get('about', function () {
    return view('website.about-us');
});

Route::get('services', function () {
    return view('website.services-2');
});

Route::get('projects', function () {
    return view('website.projects');
});

Route::get('project-single', function () {
    return view('website.project-single');
});

Route::get('team', function () {
    return view('website.team');
});

Route::get('blogs', function () {
    return view('website.blog-grid');
});

Route::get('blog-single', function () {
    return view('website.blog-single');
});

Route::get('contact', function () {
    return view('website.contact');
});

Route::get('gallery', function(){
    return view('website.gallery');
});

Route::get('appointment', function(){
    return view('website.appointment');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
