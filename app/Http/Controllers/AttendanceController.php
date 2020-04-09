<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();
        return view('attendances.index',['attendances' => $attendances]);
    }
    public function timeIn() {
        // logic for starting the  time attendance

        // redirect to home route　　　ホームでなくてタスク確認画面に以降
    }
    public function timeOut() {
        // stop attendace

        // $overtime = $this->calculateOverTime();

        // redirect home
    }

    public function calculateOverTime() {
        // logic here

        // return value
    }

    // public function create()
    // {
    //     //create.blade.phpを表示
    //     return view('attendances.create');
    // }

    // public function store(Request $request)
    // {
    //     // dd('ここに保存処理');
    //     $attendance = new Attendance();

    //     $attendance->body = $request->body;
    //     $attendance->task = $request->task;
    //     $attendance->calender =$request->callender;///カレンダーがどういう風になるかは後回し
    //     $attendance->save();//DBに①日報画面②タスク、その期限を保存
    //     return redirect()->route('attendance.index');
    // }




}
