<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Jobs::with('employer.job')->latest()->simplePaginate(10);
        return view('jobs.index', [
            'jobs' => $jobs,
            'ishidden' => true,
        ]);
    }

    public function create_page()
    {
        return view('jobs.create', []);
    }

    public function update_page($id)
    {
        $jobs = Jobs::find($id);
        return view('jobs.update', ['job' => $jobs]);
    }

    public function show($id)
    {
        $jobs = Jobs::find($id);
        return view('jobs.job', ['job' => $jobs]);
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'salary' => 'nullable|string|max:255',
        ]);

        Jobs::create([
            'title' => $validated['title'],
            'salary' => $validated['salary'] ?? "0",
            'employer_id' => 1
        ]);

        return redirect('/jobs');
        // dd($request->all());
    }

    public function destroy($id)
    {
        $item = Jobs::find($id); // Find the record by ID

        if ($item) {
            $item->delete(); // Delete the record
            // return response()->json(['message' => 'Item deleted successfully']);
            return redirect('/jobs');
        }

         return response()->json(['message' => 'Item not found'], 404);
        // return redirect('/jobs');
    }

    public function update(Request $request, $id)
{

    $job = Jobs::find($id);

    if ($job) {
        $job->update([
            'title' => $request->input('title'),
            'salary' => $request->input('salary'),
        ]);
        return redirect('/jobs');
    }

    return response()->json(['message' => 'Job not found'], 404);
}


}
