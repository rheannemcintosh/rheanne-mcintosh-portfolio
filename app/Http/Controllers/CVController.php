<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Employer;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CVController extends Controller
{
    public function index()
    {
        $education = Education::with('degrees')->get();

        $employers = Employer::where('show_on_cv', true)
            ->whereHas('roles', function ($query) {
                $query->where('show_on_cv', true)
                    ->whereHas('responsibilities', function ($query) {
                        $query->where('show_on_cv', true);
                    });
            })
            ->with(['roles' => function ($query) {
                $query->where('show_on_cv', true)
                    ->with(['responsibilities' => function ($query) {
                        $query->where('show_on_cv', true);
                    }]);
            }])
            ->get();

        foreach ($employers as $employer) {
            $employer->roles = $employer->roles->sortBy(function ($role) {
                return $role->sort_order;
            });

            foreach ($employer->roles as $role) {
                $role->responsibilities = $role->responsibilities->sortBy(function ($responsibility) {
                    return $responsibility->sort_order;
                });
            }
        }

        return Inertia::render('CV/Index',[
            'education' => $education,
            'employers' => $employers,
        ]);
    }
}
