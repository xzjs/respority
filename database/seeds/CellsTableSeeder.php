<?php

use Illuminate\Database\Seeder;

class CellsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i=1;
        for (; $i <= 30; $i++) {
            for ($j = 1; $j <= 20; $j++) {
                DB::table('cells')->insert([
                    'no' => $j,
                    'floor_id' => $i
                ]);
            }
        }
        for(;$i<=36;$i++){
            for($j=1;$j<=18;$j++){
                DB::table('cells')->insert([
                    'no' => $j,
                    'floor_id' => $i
                ]);
            }
        }
        for(;$i<=66;$i++){
            for($j=1;$j<=11;$j++){
                DB::table('cells')->insert([
                    'no' => $j,
                    'floor_id' => $i
                ]);
            }
        }
    }
}
