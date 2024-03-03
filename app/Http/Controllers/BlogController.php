<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class BlogController extends Controller
{
    public function show()
    {
        return Inertia::render('Home/Index');
    }

    public function detailOnePost()
    {
        return Inertia::render('Post/Index');
    }
}
