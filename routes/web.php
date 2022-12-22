<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\updateControl;
use App\Http\Controllers\viewControl;
use App\Http\Controllers\deleteControl;

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

//Admin

Route::get("/", [homeControl::class, "index"]);

Route::get("/redirect", [homeControl::class, "redirectFunc"]);

Route::get("/projects", [viewControl::class, "viewProjects"]);

Route::get("/delete/{id}", [deleteControl::class, "deleteProject"]);

Route::post("/create-project", [updateControl::class, "addProjects"]);

Route::get("/add", [viewControl::class, "addProjects"]);

Route::get("/lecturers", [viewControl::class, "viewLecturers"]);

Route::get("/students", [viewControl::class, "viewStudents"]);


//Lecturer

Route::get("/supervisee", [viewControl::class, "viewSupervisee"]);

Route::get("/examinee", [viewControl::class, "viewExaminee"]);

Route::get("/update/{id}", [updateControl::class, "viewUpdate"]);

Route::post("update/update-project", [updateControl::class, "updateProjects"]);


//Test

Route::view("/test", "test");


//Dahboard Auth

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
