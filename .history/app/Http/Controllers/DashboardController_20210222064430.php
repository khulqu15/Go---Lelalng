<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function product()
    {
        return view('dashboard.product');
    }

    public function auction()
    {
        return view('dashboard.auction');
    }

    public function user()
    {
        return view('dashboard.user');
    }
}
