<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\projectController;
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
    return view('welcome');
});
//prestataire routes
Route::get('/nos-prestataires', function () {
    return view('prestataire');
});
//Client dashboard
Route::get('/client/profil', function () {
    return view('users.client.home');
});

//Project by clients
Route::resource('client/projects', ProjectController::class);


//Freelancer dashboard
Route::get('/freelance/profil', function () {
    return view('users.freelancer.home');
});

//Admin dashboard
Route::get('/admin/dashboard', function () {
    return view('users.admin.home');
});
