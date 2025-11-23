<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\http\Request;

class DataMasterController extends Controller
{
    public function index()
    {
        return view('admin.data-master');
    }
}

