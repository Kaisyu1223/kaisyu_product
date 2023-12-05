<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
            'category_id' => 1,
            'name' => 'ラガー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('subcategories')->insert([
            'category_id' => 1,
            'name' => 'エール',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('subcategories')->insert([
            'category_id' => 2,
            'name' => 'スティルワイン',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('subcategories')->insert([
            'category_id' => 2,
            'name' => 'スパークリングワイン',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('subcategories')->insert([
            'category_id' => 3,
            'name' => '芋焼酎',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('subcategories')->insert([
            'category_id' => 3,
            'name' => '麦焼酎',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
         DB::table('subcategories')->insert([
             'category_id' => 4,
            'name' => '柑橘系チューハイ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('subcategories')->insert([
            'category_id' => 4,
            'name' => 'その他チューハイ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
         DB::table('subcategories')->insert([
            'category_id' => 5,
            'name' => 'ジャパニーズウイスキー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('subcategories')->insert([
            'category_id' => 5,
            'name' => 'スコッチウイスキー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
         DB::table('subcategories')->insert([
            'category_id' => 5,
            'name' => 'その他ウイスキー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
