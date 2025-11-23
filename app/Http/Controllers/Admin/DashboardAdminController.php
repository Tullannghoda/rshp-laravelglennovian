<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard-admin');
    }
}

