<?php

use Illuminate\Support\Facades\Route;
use App\Models\Jobs;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {

    return view('jobs', [
        'jobs' => jobs::getAll()
    ]);
});

Route::get(
    '/jobs/{id}',
    function ($id) {
        return view('job', ['job' => Jobs::getById($id)]);
    }
);

Route::get('/contact', function () {
    return view('contact');
});