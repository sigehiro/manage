<?php

namespace App\Http\Controllers;


use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        // Execute this method when save button is clicked
        // You save the data to database

        $reports = report::all();
       return view('reports.index',['reports' => $reports]);
        //After saving the data, change the page to confirm_page
    }

    public function create()
    {
        // Execute this method when save button is clicked
        // You save the data to database

        return view('reports.create');
    //     $reports = report::all();
    //    return view('reports.create',['reports' => $reports]);
        //After saving the data, change the page to confirm_page
    }


    
    public function store(Request $request )
    {
        // dd('ここに処理をかく');
        $report = new Report();
        
        $report->body = $request->body;
        $report->task = $request->task;
        $report->save();
        return redirect()->route('report.index');

    }

    public function edit(int $id)
    {
        $report = Report::find($id);

        return view('reports.edit', [
            'report' => $report,
        ]);
    }

    //編集の保持
    public function update(int $id, Request $request)
    {
    $report = Report::find($id);

    $report->body = $request->body; //画面で入力された本文を代入
    $report->save(); //DBに保存

    return redirect()->route('report.index'); //一覧ページにリダイレクト
    }

}
