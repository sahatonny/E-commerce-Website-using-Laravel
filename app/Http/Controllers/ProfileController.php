<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProfileController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function index()
    {
        // Fetch data if needed and return the view
        return view('profile.index');
    }



    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            // Add other fields as necessary
        ]);

        $user = Auth::user();
        $user->update($request->all());

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
    }

    public function destroy()
    {
        $user = Auth::user();
        $user->delete();

        Auth::logout();

        return redirect('/')->with('success', 'Profile deleted successfully.');
    }
    public function show($id)
    {
        // Fetch profile data by ID
      
    }



}
