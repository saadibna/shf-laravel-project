<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.index');
    }
    public function general()
    {
        return view('admin.general');
    }
}
