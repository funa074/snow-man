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
        
        $ski_resort_value = new \App\Models\SkiResort([
            'name' => 'めいほうスキー場',
            'lat'  => 35.941763, 
            'lon'  => 137.042953
        ]);
        $ski_resort_value->save();

        $ski_resort_value = new \App\Models\SkiResort([
            'name' => 'ダイナランド',
            'lat'  => 35.98383,
            'lon'  => 136.883042
        ]);
        $ski_resort_value->save();

        $ski_resort_value = new \App\Models\SkiResort([
            'name' => '高鷲スノーパーク',
            'lat'  => 35.9982091,
            'lon'  => 136.8773292
        ]);
        $ski_resort_value->save();

        $ski_resort_value = new \App\Models\SkiResort([
            'name' => 'ホワイトピアたかす',
            'lat'  => 35.9558168,
            'lon'  => 136.9348753
        ]);
        $ski_resort_value->save();

        $ski_resort_value = new \App\Models\SkiResort([
            'name' => '鷲ヶ岳スキー場',
            'lat'  => 35.955772,
            'lon'  => 136.934835
        ]);
        $ski_resort_value->save();
        
        $ski_resort_value = new \App\Models\SkiResort([
            'name' => 'ウィングヒルズ白鳥リゾート',
            'lat'  => 35.9663236,
            'lon'  => 136.8027196
        ]);
        $ski_resort_value->save();

        $ski_resort_value = new \App\Models\SkiResort([
            'name' => 'ハチ北スキー場',
            'lat'  => 35.40689,
            'lon'  => 134.5485514
        ]);
        $ski_resort_value->save();

        $ski_resort_value = new \App\Models\SkiResort([
            'name' => '琵琶湖バレイ',
            'lat'  => 35.2085,
            'lon'  => 135.8926
        ]);
        $ski_resort_value->save();
        
        $ski_resort_value = new \App\Models\SkiResort([
            'name' => '横手山・渋峠スキー場',
            'lat'  => 36.6701251,
            'lon'  => 138.5274677
        ]);
        $ski_resort_value->save();

        $ski_resort_value = new \App\Models\SkiResort([
            'name' => 'グラン・ヒラフ',
            'lat'  => 42.8648783,
            'lon'  => 140.700983
        ]);
        $ski_resort_value->save();

        $ski_resort_value = new \App\Models\SkiResort([
            'name' => 'スキージャム勝山',
            'lat'  => 36.0602,
            'lon'  => 136.6003
        ]);
        $ski_resort_value->save();

        $ski_resort_value = new \App\Models\SkiResort([
            'name' => 'かぐらスキー場',
            'lat'  => 36.8942267,
            'lon'  => 138.7662481
        ]);
        $ski_resort_value->save();

        $ski_resort_value = new \App\Models\SkiResort([
            'name' => '川場スキー場',
            'lat'  => 36.760127,
            'lon'  => 139.106217
        ]);
        $ski_resort_value->save();

        $ski_resort_value = new \App\Models\SkiResort([
            'name' => '安比高原スキー場',
            'lat'  => 40.0022785,
            'lon'  => 140.9706213
        ]);
        $ski_resort_value->save();
    }
}