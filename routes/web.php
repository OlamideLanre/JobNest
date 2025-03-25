<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view(
        'home'
    );
});

// displays all jobs
Route::get('/jobs', function () {
    $Jobs = Job::with('employer')->latest()->simplePaginate(5);
    return view(
        'jobs.index',
        ['jobs' => $Jobs]
    );
});

//creates job
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//show a selected job
Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

//stores a new job
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});

//edit a job
Route::get('/jobs/{id}/edit', function ($id) {

    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});

//update a resource
Route::patch('/jobs/{id}', function ($id) {
    //validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);
    //authorize..(on hold)
    //update job
    $job = Job::findOrFail($id);
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);
    return redirect('/jobs/' . $job->id);
});

//delete a resource
Route::delete('/jobs/{id}', function ($id) {

    $job = Job::findOrFail($id);
    $job->delete();
    return redirect('/jobs');
});

Route::get('contact', function () {
    return view('contact');
});
