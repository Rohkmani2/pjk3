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
    return view('dashboard.login.login');
});
Route::get('/home', function () {
    return view('dashboard.index');
});
Route::get('/login', function () {
    return view('dashboard.login.login');
});
Route::get('/schedule', function () {
    return view('dashboard.kategori.schedule');
});
Route::get('/personal', function () {
    return view('dashboard.kategori.personal');
});
Route::get('/calendar', function () {
    return view('dashboard.calendar.calendar');
});
Route::get('/newpersonal', function () {
    return view('dashboard.kategori.new_personal');
});
Route::get('/newschedule', function () {
    return view('dashboard.kategori.new_schedule');
});

