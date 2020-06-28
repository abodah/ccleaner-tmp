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
    return view('home');
})->name('home');

Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::get('/register', function() {
    return view('auth.register');
})->name('register');


Route::get('/forgot-password', function() {
    return view('auth.forgot');
})->name('password.request');

Route::post('/auth', function() {
    return redirect()->route('team');
})->name('dummyauth');
Route::get('/teams', function() {
    return view('resources.team');
})->name('team');

Route::get('/teams/detail', function() {
    return view('resources.teamdetail');
})->name('teamdetail');

Route::get('/teams/edit', function() {
    $applications = ['Backend Engineer', 'Frontend Engineer', 'QA Engineer', 'Project Manager'];
    $availabilities = ['soon', '1-month', 'closed'];
    $workingPreferences = ['on site', 'remote'];
    return view('resources.teamedit', compact('applications', 'availabilities', 'workingPreferences'));
})->name('teamedit');

