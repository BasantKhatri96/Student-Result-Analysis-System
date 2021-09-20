<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BCAsubjectscontroller;
use App\Http\Controllers\FirstSemDigitalElectronic;
use App\Http\Controllers\FirstSemDigitalElectronicController;
use App\Http\Controllers\FirstSemDiscretemathematicsController;
use App\Http\Controllers\FirstSemEnglishController;
use App\Http\Controllers\FirstsemisiterSubjectList;
use App\Http\Controllers\FirstSemisterindianlanguageController;
use App\Http\Controllers\FirstSemProblemSolvingusingCController;
use App\Models\FirstSemEnglish;
use App\Models\FirstSemProblemSolvingUsingC;
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
    return view('layouts.app');
});

Route::get('/admindashboard',[AdminDashboardController::class,'index'])->name('admin.dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//First Semister Indian Language Route
Route::resource('IndianLanguage',FirstSemisterindianlanguageController::class);

// Route::get('IndianLanguage/select',[FirstSemisterindianlanguageController::class.'language_select'])->name('IndianLanguage.select');


Route::get('BCAsubjects',[BCAsubjectscontroller::class,'firstsemsubject'])->name('firstsemistersubjects.index');
Route::get('BCAsubjects',[BCAsubjectscontroller::class,'secsemsubject'])->name('secsemistersubjects.index');
// Route::get('BCAsubjects',[BCAsubjectscontroller::class,'thirdstsemsubject'])->name('thirdstsemistersubjects.index');
// Route::get('BCAsubjects',[BCAsubjectscontroller::class,'fourthstsemsubject'])->name('fourthstsemistersubjects.index');
// Route::get('BCAsubjects',[BCAsubjectscontroller::class,'fifthstsemsubject'])->name('fifthstsemistersubjects.index');
// Route::get('BCAsubjects',[BCAsubjectscontroller::class,'sixthstsemsubject'])->name('sixthstsemistersubjects.index');
//First Semister English Route
Route::resource('FirstSemEnglish',FirstSemEnglishController::class);
Route::get('FirstSemEnglish/deleteall',[FirstSemEnglishController::class,'deleteallrecords'])->name('FirstSemEnglish.deleteall');

//First sem problem solving using c
Route::resource('FirstSemProblemSolvingUsingC',FirstSemProblemSolvingusingCController::class);

// // First sem digital electronics
Route::resource('FirstSemDigitalElectronic',FirstSemDigitalElectronicController::class);
// First sem Discrete Mathematics
Route::resource('FirstSemDiscreteMathematics',FirstSemDiscretemathematicsController::class);