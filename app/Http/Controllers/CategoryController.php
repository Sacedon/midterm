<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {
        // Load data and render the Vue component
        return Inertia::render('Categories/Index', [
            'categories' => Category::all(),
        ]);
    }
}
