<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'りんご',
            'price' => 128,
            'category' => '青果',
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => '納豆',
            'price' => 98,
            'category' => '冷蔵食品',
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => 'ポテトチップスしあわせバター',
            'price' => 78,
            'category' => 'お菓子',
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => '鯖のみりんぼし',
            'price' => 398,
            'category' => '加工食品',
        ];
        DB::table('items')->insert($param);
    }
}
