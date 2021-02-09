<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FreelanceController;
use App\Http\Controllers\ProposalController;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
//Show home page
Route::get('/', function () {
    return view('welcome');
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
    Route::get('client/actions', [ClientController::class, 'actions'])->name('actions');
    Route::post('client/project/proposals',[ClientController::class, 'getProjectProposals'])->name('load-proposals');
    Route::get('client/delete-project/{id}',[ProjectController::class, 'deleteProject'])->name('delete-project');

    //Freelancer profile
   // Route::resource('/freelance/my-profile',FreelanceController::class, ['as' => 'freelance']);
   Route::get('freelance/my-profile',[FreelanceController::class, 'show'])->name('freelancer-profile');
   Route::get('freelance/projets',[FreelanceController::class, 'index'])->name('freelancer-projets');
   Route::get('freelance/my-profile/{id}/edit',[FreelanceController::class, 'edit'])->name('freelancer-edit');
   Route::post('freelance/my-profile/update',[FreelanceController::class, 'update'])->name('freelancer-update');
   Route::post('freelance/proposal',[FreelanceController::class, 'saveProposal'])->name('save-proposal');
   Route::post('freelance/education',[FreelanceController::class, 'addEducation'])->name('save-education');
   Route::post('freelance/update-education',[FreelanceController::class, 'updateEducation'])->name('update-education');
   Route::post('freelance/update-experience',[FreelanceController::class, 'updateExperience'])->name('update-experience');
   Route::get('freelance/delete-education/{id}',[FreelanceController::class, 'deleteFormation'])->name('delete-education');
   Route::get('freelance/delete-experience/{id}',[FreelanceController::class, 'deleteExperience'])->name('delete-experience');
   Route::get('freelance/edit-education/{id}',[FreelanceController::class, 'editFormation'])->name('edit-education');
   Route::get('freelance/edit-experience/{id}',[FreelanceController::class, 'editExperience'])->name('edit-experience');
   Route::post('freelance/experience',[FreelanceController::class, 'addExperience'])->name('save-experience');

   /*----------------------------------Adminstrator routes ----------------------------------------------------*/
   Route::prefix('admin')->group(function () {
    Route::get('/dashboard',[AdminController::class, 'home'])->name('admin-home');
    Route::get('/categories',[CategoryController::class, 'index'])->name('list-categorie');
    Route::post('/categorie',[CategoryController::class, 'saveCategory'])->name('save-categorie');
    Route::post('/update-categorie',[CategoryController::class, 'updateCategory'])->name('update-categorie');
    Route::get('/delete-category/{id}',[CategoryController::class, 'deleteCategory'])->name('delete-category');
    Route::get('/create-category',[CategoryController::class, 'create'])->name('create-category');
    Route::get('/edit/{id}',[CategoryController::class, 'edit'])->name('edit-category');
   });
});


Route::get('/nos-projets',[ ProjectController::class, 'allProjects']);
Route::get('/nos-projets/{id}', [ProjectController::class, 'displayProject']);


//Proposal by freelancer route
Route::resource('/nos-projets/{id}/proposal', ProposalController::class);
