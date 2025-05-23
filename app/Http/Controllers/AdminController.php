<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Show the application's dashboard.
     */
    public function index(): View
    {
        return view('admin.dashboard');
    }
}