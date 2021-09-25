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
           'name' => '六甲山スノーパーク'
       ]);

       DB::table('ski_resorts')->insert([
           'name' => 'めいほうスキー場'
       ]);

       DB::table('ski_resorts')->insert([
           'name' => '鷲ヶ岳スキー場'
       ]);

       DB::table('ski_resorts')->insert([
           'name' => 'ダイナランド'
       ]);

       DB::table('ski_resorts')->insert([
           'name' => '高鷲スノーパーク'
        ]);
        
        DB::table('ski_resorts')->insert([
            'name' => 'ホワイトピアたかす'
        ]);
        
       DB::table('ski_resorts')->insert([
           'name' => 'ウィングヒルズ白鳥リゾート'
       ]);
    }
}