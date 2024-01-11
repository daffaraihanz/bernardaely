<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingPageController::class, 'getDatas']);

Route::get('/admin', [AdminController::class, 'getDatas']);

Route::get('/profile', [AdminController::class, 'getDatasProfile']);
Route::get('/experiences', [AdminController::class, 'getDatasExperiences']);
Route::get('/socials', [AdminController::class, 'getDataSocial']);
Route::post('/storeDataExperience', [AdminController::class, 'storeDataExperience']);
Route::post('/storeDataSkill', [AdminController::class, 'storeDataSkill']);
Route::post('/storeDataEdu', [AdminController::class, 'storeDataEdu']);
Route::post('/storeDataSocial', [AdminController::class, 'storeDataSocial']);
Route::any('/destroyExperience/{id}', [AdminController::class, 'destroyExperience']);
Route::any('/destroySkill/{id}', [AdminController::class, 'destroySkill']);
Route::any('/destroyEdu/{id}', [AdminController::class, 'destroyEdu']);
Route::any('/destroySocial/{id}', [AdminController::class, 'destroySocial']);
Route::any('/updateDataProfile', [AdminController::class, 'updateDataProfile']);
Route::any('/updateDataExperience/{id}', [AdminController::class, 'updateDataExperience']);
Route::any('/updateDataSkill/{id}', [AdminController::class, 'updateDataSkill']);
Route::any('/updateDataEducation/{id}', [AdminController::class, 'updateDataEducation']);
Route::any('/updateSocial/{id}', [AdminController::class, 'updateDataSocial']);
Route::any('/updateCopyright', [AdminController::class, 'updateCopyright']);
Route::any('/updateImage', [AdminController::class, 'storeDataImage']);
