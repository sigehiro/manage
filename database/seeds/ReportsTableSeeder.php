<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reports = [
            [
                'body' =>'今日はかなり時間に追われていて何もできなかった。',
                'task' =>'早起き７時にYouTubeを見る',
            ],
            [
                'body' =>'来週の月曜日はかなり大変になりそうだ。準備をしっかり行いたい',
                'task' =>'ブランディングについて学ぶ',
            ],
        ];

        foreach ($reports as $report){

            DB::table('reports')->insert([
                'body' => $report['body'],
                'task' => $report['task'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

    }
}
