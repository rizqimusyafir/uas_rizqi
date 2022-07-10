<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Posts;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'siteName' => 'Musyafir Site',
            'title' => 'Dashboard',
            'countPost' => Posts::count(),
            'countCategory' => Category::count()
        ]);
    }
}
