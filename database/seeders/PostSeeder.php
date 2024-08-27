<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Factoryクラスで定義した内容にもとづいてダミーデータを5つ生成し、Postテーブルに追加する
         Post::factory()->count(5)->create();
    }
}
