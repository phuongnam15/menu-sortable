<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'id' => 2,
                'title' => 'Illo culpa dolore eo',
                'slug' => 'nulla-dolore-sapient',
                'description' => '<p>Nisi perspiciatis, e.</p>',
                'image' => '1621651621slider2.jpg',
                'category' => '1',
                'status' => 'show',
                'created_at' => '2021-05-21 21:02:01',
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'title' => 'Distinctio Et itaqu',
                'slug' => 'labore-neque-facere',
                'description' => '<p>Autem reiciendis off.</p>',
                'image' => '1621651638slider3.jpg',
                'category' => '3',
                'status' => 'show',
                'created_at' => '2021-05-21 21:02:18',
                'updated_at' => '2021-05-21 21:05:39',
            ],
            [
                'id' => 4,
                'title' => 'Illum dolorum accus',
                'slug' => 'nulla-reiciendis-con',
                'description' => '<p>Quis laboris ut est.</p>',
                'image' => '1621651650slider4.jpg',
                'category' => '2',
                'status' => 'show',
                'created_at' => '2021-05-21 21:02:30',
                'updated_at' => '2021-05-21 21:05:42',
            ],
            [
                'id' => 5,
                'title' => 'Et nulla mollit culp',
                'slug' => 'et-nulla-mollit-culp',
                'description' => '<p>Delectus, aut aut au.</p>',
                'image' => '1621652968logo.png',
                'category' => '1',
                'status' => 'show',
                'created_at' => '2021-05-22 02:57:03',
                'updated_at' => '2021-05-22 03:09:28',
            ],
        ]);
    }
}
