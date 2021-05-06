<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.index');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function blog()
    {
        return view('admin.blog');
    }

    public function service()
    {
        return view('admin.service');
    }

    public function lawyer()
    {
        return view('admin.lawyer');
    }

    public function category()
    {
        return view('admin.category');
    }
    public function case()
    {
        return view('admin.case');
    }
    public function appoint()
    {
        return view('admin.appointment');
    }
    public function test()
    {
        return view('admin.testimonial');
    }
    public function table()
    {
        return view('admin.blogtable');
    }
    public function table1()
    {
        return view('admin.testimonialtable');
    }
    public function table2()
    {
        return view('admin.servicetable');
    }
    public function table3()
    {
        return view('admin.lawyertable');
    }
    public function table4()
    {
        return view('admin.categorytable');
    }
}
