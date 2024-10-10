<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    /**
     * Display the home page, which is the main landing page for the site.
     *
     * It displays the name, title, image, short description, a contact button, and a list of skills.
     *
     * @return \Inertia\Response
     */
    public function home (): \Inertia\Response
    {
        return Inertia::render(
            'Home/Index'
        );
    }
}
