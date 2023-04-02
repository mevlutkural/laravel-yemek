<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('Dashboard.dashboard');
    }

    public function users()
    {
        return view('Dashboard.pages.users.users');
    }
}
