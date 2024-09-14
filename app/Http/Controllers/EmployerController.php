<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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

        return Inertia::render('Employers/Index', [
            'employers' => $employers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
