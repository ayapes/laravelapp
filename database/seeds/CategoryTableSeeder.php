<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'cate' => '果物',
        ];
        DB::table('category')->insert($param);

        $param = [
            'cate' => '野菜',
        ];
        DB::table('category')->insert($param);

        $param = [
            'cate' => '鮮魚',
        ];
        DB::table('category')->insert($param);

        $param = [
            'cate' => '精肉',
        ];
        DB::table('category')->insert($param);

        $param = [
            'cate' => 'お菓子',
        ];
        DB::table('category')->insert($param);
    }
}
