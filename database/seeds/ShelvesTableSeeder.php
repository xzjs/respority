<?php

use Illuminate\Database\Seeder;

class ShelvesTableSeeder extends Seeder
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
            DB::table('shelves')->insert([
                'no' => $i,
                'type' => 0
            ]);
        }
        for(;$i<=18;$i++){
            DB::table('shelves')->insert([
                'no' => $i,
                'type' => 1
            ]);
        }
    }
}
