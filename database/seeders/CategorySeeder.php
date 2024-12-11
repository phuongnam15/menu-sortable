<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id' => 1, 'title' => 'about us', 'slug' => 'about-us', 'status' => 'show', 'created_at' => '2021-05-21 07:11:51', 'updated_at' => null],
            ['id' => 2, 'title' => 'projects', 'slug' => 'projects', 'status' => 'show', 'created_at' => '2021-05-21 07:16:38', 'updated_at' => null],
            ['id' => 3, 'title' => 'get involved', 'slug' => 'get-involved', 'status' => 'show', 'created_at' => '2021-05-21 07:19:49', 'updated_at' => null],
            ['id' => 4, 'title' => 'news & events', 'slug' => 'news-events', 'status' => 'show', 'created_at' => '2021-05-21 07:20:17', 'updated_at' => null],
        ]);
    }
}
