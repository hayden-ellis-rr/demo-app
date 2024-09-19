<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $query = Profile::where('id', '>', 0);

        return view('lead-management.profiles.index', [
            'profiles' => $query->paginate(10),
        ]);
    }

    public function show(Profile $profile)
    {
        return view('lead-management.profiles.show', [
            'profile' => $profile,
        ]);
    }
}
