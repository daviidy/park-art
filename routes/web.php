<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FreelanceController;
use App\Http\Controllers\ProposalController;

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
//Show home page
Route::get('/', function () {
    return view('welcome');
});

Route::get('/client-show', function () {
    return view('users.freelancer.show');
});

//prestataire routes
Route::get('/nos-prestataires',[FreelanceController::class, 'allFreelancers']);
Route::get('/prestataire/{id}',[FreelanceController::class, 'freelancerInfo']);


//Group for route require Auth
Route::group(['middleware' => ['auth']], function () {

    //Client dashboard
    //Project by clients
    Route::resource('client/my-profile', ClientController::class, ["as"=>"client"]);

    // Client create and edit new project
    Route::resource('client/my-profile/projects', ProjectController::class);
    //Dislay all client projects
    Route::get('client/all-projects', [ClientController::class, 'displayAllMyProjects'])->name('displayAllMyProjects');

    //Freelancer profile
   // Route::resource('/freelance/my-profile',FreelanceController::class, ['as' => 'freelance']);
   Route::get('freelance/my-profile',[FreelanceController::class, 'show'])->name('freelancer-profile');
   Route::get('freelance/projets',[FreelanceController::class, 'index'])->name('freelancer-projets');
   Route::get('freelance/my-profile/{id}/edit',[FreelanceController::class, 'edit'])->name('freelancer-edit');
   Route::post('freelance/my-profile/update',[FreelanceController::class, 'update'])->name('freelancer-update');
   Route::post('freelance/proposal',[FreelanceController::class, 'saveProposal'])->name('save-proposal');
});


Route::get('/nos-projets',[ ProjectController::class, 'allProjects']);
Route::get('/nos-projets/{id}', [ProjectController::class, 'displayProject']);


//Admin dashboard
Route::get('/admin/dashboard', function () {
    return view('users.admin.home');
});


//Proposal by freelancer route
Route::resource('/nos-projets/{id}/proposal', ProposalController::class);
