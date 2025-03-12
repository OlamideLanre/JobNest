<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(
        'home'
    );
});
Route::get('/jobs', function () {
    return view(
        'jobs',
        [
            'jobs' => [

                [
                    'title' => 'Director',
                    'salary' => '$50,000'
                ],
                [
                    'title' => 'Clerk',
                    'salary' => '$30,000'
                ],
                [
                    'title' => 'Strategist',
                    'salary' => '$40,000'
                ]
            ]
        ]
    );
    // return 'about page';
    // return ['foo'=>'bar'];
});
Route::get('contact', function () {
    return view('contact');
});
