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
        for($i=1;$i<=12;$i++){
            for($j=1;$j<=3;$j++){
                DB::table('floors')->insert([
                    'no' => $j,
                    'shelf_id' => $i
                ]);
            }
        }
    }
}
