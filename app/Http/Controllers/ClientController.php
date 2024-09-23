<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function create()
    {
        return view('layouts.frontend.home.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:500',
        ]);

        Client::create($validatedData);

        return redirect()->back()->with('success', 'User details saved successfully!');
    }
}
