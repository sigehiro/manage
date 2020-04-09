<?php

namespace App\Http\Controllers;

use App\Monthlyreport;
use Illuminate\Http\Request;

class MonthlyreportController extends Controller
{
    public function index()
    {
        $monthlyreports = Monthlyreport::all();
        return view('monthlyreports.index',['monthlyreports' =>$monthlyreports]);
    }




    //一旦置いてる初期の分
    public function create()
    {
        $monthlyreports = Monthlyreport::all();
        
        return view('monthlyreports.create',['monthlyreports' =>$monthlyreports]);
       
    }
}
