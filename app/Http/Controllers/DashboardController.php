<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

        public function index()
        {
            // You can add logic here to fetch data for your dashboard
            return view('dashboard.index');
        }
}
