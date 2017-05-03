<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ShelvesTableSeeder::class);
        $this->call(FloorsTableSeeder::class);
        $this->call(CellsTableSeeder::class);
        $this->call(GoodsTableSeeder::class);
    }
}
