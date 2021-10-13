<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkiResortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ski_resorts')->truncate(); //2回目実行の際にシーダー情報をクリア
        DB::table('ski_resorts')->insert([
            'name' => '六甲山スノーパーク',
            'lat'  => 34.7679067,
            'lon'  => 135.2426071
        ]);

        DB::table('ski_resorts')->insert([
            'name' => 'めいほうスキー場',
            'lat'  => 35.941763, 
            'lon'  => 137.042953
        ]);

        DB::table('ski_resorts')->insert([
            'name' => 'ダイナランド',
            'lat'  => 35.98383,
            'lon'  => 136.883042
        ]);
            
        DB::table('ski_resorts')->insert([
            'name' => '高鷲スノーパーク',
            'lat'  => 35.9982091,
            'lon'  => 136.8773292
        ]);

        DB::table('ski_resorts')->insert([
            'name' => 'ホワイトピアたかす',
            'lat'  => 35.95581689999999,
            'lon'  => 136.9348753
        ]);

        DB::table('ski_resorts')->insert([
            'name' => '鷲ヶ岳スキー場',
            'lat'  => 35.955772,
            'lon'  => 136.934835
        ]);

        DB::table('ski_resorts')->insert([
            'name' => 'ウィングヒルズ白鳥リゾート',
            'lat'  => 35.9663236,
            'lon'  => 136.8027196
        ]);
    }
}