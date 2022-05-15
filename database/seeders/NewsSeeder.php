<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'abcd',
            'category_id' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'zxc',
            'category_id' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'xyz',
            'category_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'pop',
            'category_id' => 2
        ]);

        for ($j = 0; $j <= 100; $j++) {
            DB::table('news')->insert([
                'heading' => Str::random(10),
                'anons' => Str::random(10),
                'text' => Str::random(10)
            ]);
        }

        for ($k = 0; $k <= 90; $k++) {
            DB::table('categoriesnews')->insert([
                'news_id' => mt_rand(1, 100),
                'category_id' => mt_rand(1, 4)
            ]);
        }

        DB::table('categoriesnews')->insert([
            'news_id' => 2,
            'category_id' => 2
        ]);

        DB::table('categoriesnews')->insert([
            'news_id' => 2,
            'category_id' => 3
        ]);

        DB::table('categoriesnews')->insert([
            'news_id' => 2,
            'category_id' => 3
        ]);

        DB::table('categoriesnews')->insert([
            'news_id' => 1,
            'category_id' => 1
        ]);

        DB::table('categoriesnews')->insert([
            'news_id' => 1,
            'category_id' => 2
        ]);

        DB::table('categoriesnews')->insert([
            'news_id' => 1,
            'category_id' => 3
        ]);

        DB::table('categoriesnews')->insert([
            'news_id' => 1,
            'category_id' => 4
        ]);

        DB::table('categoriesnews')->insert([
            'news_id' => 4,
            'category_id' => 3
        ]);

        DB::table('categoriesnews')->insert([
            'news_id' => 4,
            'category_id' => 2
        ]);

        DB::table('categoriesnews')->insert([
            'news_id' => 4,
            'category_id' => 1
        ]);
    }
}
