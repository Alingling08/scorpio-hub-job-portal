<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userAttr = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Password::min(6)],
        ]);

        $employerAttr = $request->validate([
            'employer' => ['required', 'string', 'max:255'],
            'logo' => ['required', File::types(['jpg', 'jpeg', 'png', 'webp']), 'max:2048'],
        ]);

        //Save to Users table
        $user = User::create($userAttr);

        //Store logo
        $logoPath = $request->logo->store('logos');


        //Save to Employer table
        $user->employer()->create([
            'name' => $employerAttr['employer'],
            'logo' => $logoPath,
        ]);

        return redirect('/')->with('success', 'Registration successful. Please log in.');

    }
}
