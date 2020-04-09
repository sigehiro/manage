<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('homes.index');
        //参考
        // return view('monthlyreports.index',['monthlyreports' =>$monthlyreports]);
    }
}
