<?php

use App\Models\Employer;
use Illuminate\Support\Facades\Route;
use App\Models\Jobs;
use App\Models\User;

// Route::get('/', function () {
//     // dd(Jobs::all());
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
$jobs = jobs::with('employer')->get();
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get(
    '/jobs/{id}',
    function ($id) {
        return view('job', ['job' => Jobs::find($id)]);
    }
);

Route::get('/contact', function () {
    return view('contact',['users'=>Employer::all()]);
});