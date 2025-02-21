<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
class JobController extends Controller
{
    public function index(){
        $jobs = Jobs::with('employer.job')->latest()->simplePaginate(10);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create_page(){
        return view('jobs.create', []);
    }

    public function show($id){
        $jobs = Jobs::find($id);
        return view('jobs.job', ['job' => $jobs]);
    }

    public function create(Request $request){

        Jobs::create([
            'title'=>$request->input('title'),
            'salary'=>$request->input('salary'),
            'employer_id'=>1
        ]);

        return redirect('/jobs');
        // dd($request->all());
    }

   
}
