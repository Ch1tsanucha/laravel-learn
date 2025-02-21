<?php

use App\Http\Controllers\JobController;
use App\Models\Employer;
use Illuminate\Support\Facades\Route;
use App\Models\Jobs;
use App\Models\User;
use App\Http\Controllers\Controller;
// Route::get('/', function () {
//     // dd(Jobs::all());
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', [JobController::class,'index']);
Route::get('/jobs/create', [JobController::class,'create_page']);
Route::post('/jobs',[JobController::class,'create']);
Route::delete('/jobs/delete/{id}',[JobController::class,'destroy']);
Route::get('/jobs/{id}',[JobController::class,'show']);

Route::get('/contact', function () {
    return view('contact',['users'=>Employer::all()]);
});