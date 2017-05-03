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
        $i = 1;
        for (; $i <= 120; $i++) {
            DB::table('goods')->insert([
                'name' => '棉衣裤',
                'model_name' => 'mianyiku',
                'unit' => '床',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for (; $i <= 240; $i++) {
            DB::table('goods')->insert([
                'name' => '睡袋',
                'model_name' => 'shuidai',
                'unit' => '个',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for (; $i <= 360; $i++) {
            DB::table('goods')->insert([
                'name' => '折叠床',
                'model_name' => 'zhediechuang',
                'unit' => '个',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
    }
}
