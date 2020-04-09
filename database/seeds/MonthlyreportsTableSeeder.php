<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MonthlyreportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $monthlyreports = [
            [
                'beforeReport' =>'2月もなかなかハードな月だったなー',
                'target' =>'今月こそは２０万達成',
                'plan' =>'計画、利益共に20達成する',
                'strategy' =>'ランサーズに絞って取り組みを強化。まずは、PRからの見直しを行っていく。'
            ],
            [
                'beforeReport' =>'3月もあっという間に終わったなー',
                'target' =>'明確に、どこまでやるか',
                'plan' =>'計画、利益共に2５達成する',
                'strategy' =>'検証が足りない。もっともっと詰めてやっていく'
            ],
        ];

        foreach ($monthlyreports as $monthlyreport){

            DB::table('monthlyreports')->insert([
                'beforeReport' =>$monthlyreport['beforeReport'],
                'target' =>$monthlyreport['target'],
                'plan' =>$monthlyreport['plan'],
                'strategy' =>$monthlyreport['strategy'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
