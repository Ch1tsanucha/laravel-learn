<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'first-name' => 'required|string|max:255',
        ]);

        dd($validated);
        return redirect('/home');
    }
}
