<?php

use Illuminate\Support\Facades\Route;
use App\Models\Jobs;


Route::get('/', function () {
    dd(Jobs::all());
    // return view('welcome');
});

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/jobs', function () {

    return view('jobs', [
        'jobs' => jobs::all()
    ]);
});

Route::get(
    '/jobs/{id}',
    function ($id) {
        return view('job', ['job' => Jobs::find($id)]);
    }
);

Route::get('/contact', function () {
    return view('contact');
});