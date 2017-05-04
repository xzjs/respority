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
                'unit' => '条',
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
        for(;$i<=654;$i++){
            DB::table('goods')->insert([
                'name' => '防寒服',
                'model_name' => 'fanghanfu',
                'unit' => '件',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for(;$i<=708;$i++){
            DB::table('goods')->insert([
                'name' => '毛巾被',
                'model_name' => 'maojinbei',
                'unit' => '条',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for(;$i<=726;$i++){
            DB::table('goods')->insert([
                'name' => '护目镜',
                'model_name' => 'humujing',
                'unit' => '个',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for(;$i<=744;$i++){
            DB::table('goods')->insert([
                'name' => '保温壶',
                'model_name' => 'baowenhu',
                'unit' => '个',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for(;$i<=762;$i++){
            DB::table('goods')->insert([
                'name' => '防灾工服',
                'model_name' => 'fangzaigongfu',
                'unit' => '件',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for(;$i<=780;$i++){
            DB::table('goods')->insert([
                'name' => '手电筒',
                'model_name' => 'shoudiantong',
                'unit' => '个',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for(;$i<=798;$i++){
            DB::table('goods')->insert([
                'name' => 'jinho',
                'model_name' => 'jinho',
                'unit' => '个',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for(;$i<=816;$i++){
            DB::table('goods')->insert([
                'name' => '携行具',
                'model_name' => 'xiexingju',
                'unit' => '件',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for(;$i<=834;$i++){
            DB::table('goods')->insert([
                'name' => '雨衣裤',
                'model_name' => 'yuyiku',
                'unit' => '键',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for(;$i<=852;$i++){
            DB::table('goods')->insert([
                'name' => '雨鞋',
                'model_name' => 'yuxie',
                'unit' => '双',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for(;$i<=873;$i++){
            DB::table('goods')->insert([
                'name' => '急救哨',
                'model_name' => 'jijiushao',
                'unit' => '个',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
        for(;$i<=918;$i++){
            DB::table('goods')->insert([
                'name' => '志愿者服',
                'model_name' => 'zhiyuanzhefu',
                'unit' => '件',
                'num' => 5,
                'cell_id' => $i
            ]);
        }
    }
}
