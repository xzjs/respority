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
        for ($i = 1; $i <= 12; $i++) {
            for ($j = 1; $j <= 20; $j++) {
                DB::table('cells')->insert([
                    'no' => $j,
                    'floor_id' => $i
                ]);
            }
        }
    }
}
