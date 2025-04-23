<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Mail\JobPosted;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;

Route::view('/', 'home');
Route::view('/contact', 'contact');
// Route::resource('jobs', JobController::class)->only(['index', 'show'])->middleware('auth');
Route::get('test', function () {
    $job = Job::first();
    TranslateJob::dispatch($job);
    // dispatch(function () {
    //     logger("hello from the queue");
    // })->delay(5);
    return 'done!';
});

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');
Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

//AUTH
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

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