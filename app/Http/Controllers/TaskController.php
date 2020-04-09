<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
       return view ( 'tasks.index',['tasks' => $tasks] );
    }

    //    昇順降順
    //    $tasks = Task::orderby('id', 'desc')->get();
   

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request )
    {
        // dd('ここに処理をかく');
        $task = new Task();
        
        $task->body = $request->body;
        $task->save();
        return redirect()->route('task.index');

    }

    public function destroy(int $id)
    {

        $task = Task::find($id); 

        //取得したデータを削除
        $task->delete();

        return redirect()->route('task.index');
    }

    public function edit(int $id)
    {
        // dd($id);
        $task = Task::find($id); 

        return view('tasks.edit', [
            'task' => $task,
        ]);
    }

    public function update(int $id, Request $request)
    {
        $task = Task::find($id);

        $task->body = $request->body; //画面で入力された本文を代入
        $task->save(); //DBに保存

        return redirect()->route('task.index'); 
    }
}
