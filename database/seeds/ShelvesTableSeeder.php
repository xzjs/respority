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
        for($i=1;$i<=17;$i++){
            DB::table('shelves')->insert([
                'no' => $i,
                'type' => 0
            ]);
        }
    }
}
