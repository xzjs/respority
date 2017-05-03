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
                'unit' => '张',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for (; $i <= 420; $i++) {
            DB::table('goods')->insert([
                'name' => '棉褥',
                'model_name' => 'mianru',
                'unit' => '个',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for (; $i <= 480; $i++) {
            DB::table('goods')->insert([
                'name' => '毛毯',
                'model_name' => 'maotan',
                'unit' => '张',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for (; $i <= 540; $i++) {
            DB::table('goods')->insert([
                'name' => '帐篷',
                'model_name' => 'zhangpeng',
                'unit' => '顶',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for (; $i <= 600; $i++) {
            DB::table('goods')->insert([
                'name' => '救生衣',
                'model_name' => 'jiushengyi',
                'unit' => '件',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for(;$i<=708;$i++){
            DB::table('goods')->insert([
                'name' => '防寒服',
                'model_name' => 'fanghanfu',
                'unit' => '件',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
    }
}
