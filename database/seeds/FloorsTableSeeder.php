<?php

use Illuminate\Database\Seeder;

class FloorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i=1;
        for(;$i<=12;$i++){
            for($j=1;$j<=3;$j++){
                DB::table('floors')->insert([
                    'no' => $j,
                    'shelf_id' => $i
                ]);
            }
        }
        for(;$i<=14;$i++){
            for($j=1;$j<=5;$j++){
                DB::table('floors')->insert([
                    'no' => $j,
                    'shelf_id' => $i
                ]);
            }
        }
    }
}
