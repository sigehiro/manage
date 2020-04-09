<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; 
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //タスクのテストサンプル
        $tasks = [
            [
                'body' => '今日は20時からZOOMで面談',
            ],
            [
                'body' => '4月23日役所に書類提出',
            ],
            [
                'body' => '5月16日結婚式',
            ],

        ];

        foreach($tasks as $task){
            
            DB::table('tasks')->insert([
                'body' => $task['body'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
