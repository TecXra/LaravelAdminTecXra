<?php

namespace app\Http\Controllers\Admin;

use Illuminate\Http\Request;

use app\Http\Requests;
use app\Http\Controllers\Controller;

class DashboardController extends Controller
{
   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }
}
