<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
class JobController extends Controller
{
    public function index(){
        $jobs = Jobs::with('employer.job')->simplePaginate(10);
        return view('jobs', [
            'jobs' => $jobs
        ]);
    }

    public function show($id){
        $jobs = Jobs::find($id);
        return view('job', ['job' => $jobs]);
    }
}
