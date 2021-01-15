<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FreelanceController;
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
Route::get('/nos-prestataires',[FreelanceController::class, 'allFreelancers']);
Route::get('/freelance/{id}',[FreelanceController::class, 'freelancerInfo']);
//Client dashboard
//Project by clients
Route::resource('client/my-profile', ClientController::class, ["as"=>"client"])->middleware(['auth']);
Route::resource('client/projects', ProjectController::class)->middleware(['auth']);


//Freelancer dashboard
// Route::get('/freelance/profil', function () {
//     return view('users.freelancer.home');
// })->middleware(['auth']);

//Admin dashboard
Route::get('/admin/dashboard', function () {
    return view('users.admin.home');
});



//Prestataire
Route::resource('/freelance/my-profile', FreelanceController::class, ["as"=>"freelance"]);