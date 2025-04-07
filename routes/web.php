<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::view('/', 'home');
Route::view('/contact', 'contact');
Route::resource('jobs', JobController::class);


// Route::controller(JobController::class)->group(function () {
//     // Index displays all jobs
//     Route::get('/jobs', 'index');

//     //creates job
//     Route::get('/jobs/create', 'create');

//     //show a selected job
//     Route::get('/jobs/{job}', 'show');

//     //stores a new job
//     Route::post('/jobs', 'store');

//     //edit a job
//     Route::get('/jobs/{job}/edit', 'edit');

//     //update a resource
//     Route::patch('/jobs/{job}', 'update');

//     //delete a resource
//     Route::delete('/jobs/{job}', 'delete');
// });
