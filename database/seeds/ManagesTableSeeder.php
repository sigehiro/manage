<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ManagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manages =[
            [
                'day' =>Carbon::create('2000','01','29'),
                'time' =>Carbon::now()->format('Y-m-d H:i:s'),

            ],
            [
                'day' => Carbon::create('2002','02','29'),
                'time' =>Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ];

        foreach ($manages as $manage ){

            DB::table('manages')->insert([
                'day' => $manage['day'],
                'time' => $manage['time'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
