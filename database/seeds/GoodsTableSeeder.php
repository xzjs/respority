<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=120;$i++){
            DB::table('goods')->insert([
                'name' => '棉衣裤',
                'model_name' => 'mianyiku',
                'unit'=>'床',
                'num'=>5,
                'cell_id'=>$i
            ]);
        }
    }
}
