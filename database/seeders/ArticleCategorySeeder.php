<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleCategorySeeder extends Seeder
{
    public function run(): void
    {
        $articleIds = Article::orderBy('id')->pluck('id')->all();
        $categoryIds = Category::orderBy('id')->pluck('id')->all();
        $total = count($categoryIds);

        // Remove rows from the earlier run so there are no duplicates
        DB::table('article_category')->delete();

        $rows = [];
        foreach ($articleIds as $i => $articleId) {
            // 3 different categories per article (2 for every 4th article, for variety)
            $count = ($i % 4 === 3) ? 2 : 3;

            for ($j = 0; $j < $count; $j++) {
                $rows[] = [
                    'article_id' => $articleId,
                    'category_id' => $categoryIds[($i + $j * 3) % $total],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('article_category')->insert($rows);
    }
}
