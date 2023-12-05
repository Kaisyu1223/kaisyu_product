<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'subcategory_id' => 1,
            'liquer' => 'お酒の名前1',
            'body' => '美味しい',
            'evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'user_id' => 2,
            'subcategory_id' => 4,
            'liquer' => 'お酒の名前2',
            'body' => 'やや美味しい',
            'evaluation' => 4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'user_id' => 3,
            'subcategory_id' => 7,
            'liquer' => 'お酒の名前3',
            'body' => '普通',
            'evaluation' => 3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
