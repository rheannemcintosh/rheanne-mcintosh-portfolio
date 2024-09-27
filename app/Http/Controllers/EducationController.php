<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EducationController extends Controller
{
    public function index()
    {
        $education = Education::with('degrees')->get();

        return Inertia::render('Education/Index', [
            'education' => $education,
        ]);
    }
}
