<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\RoleUser;

class UserRoleController extends Controller
{
    public function index()
    {
        $userRole = RoleUser::with(['user', 'role'])->get();
        return view('admin.user-role.index', compact('userRole'));
    }
}