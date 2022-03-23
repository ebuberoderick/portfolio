<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {return Inertia::render('Welcome');});
Route::get('/welcome', function () {return Inertia::render('Welcome');})->name('welcome');
Route::get('/about', function () {return Inertia::render('about');})->name('about');
Route::get('/services', function () {return Inertia::render('services');})->name('services');
Route::get('/works', function () {return Inertia::render('works');})->name('works');
Route::get('/testimony', function () {return Inertia::render('testimony');})->name('testimony');
Route::get('/contact', function () {return Inertia::render('contact');})->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
