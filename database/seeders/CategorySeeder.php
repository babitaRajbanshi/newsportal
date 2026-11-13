<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Politics'      => 'Latest political news, analysis and updates from Nepal.',
            'Business'      => 'Economy, markets, banking and business news.',
            'Sports'        => 'Cricket, football and all sports coverage.',
            'Entertainment' => 'Movies, music, celebrities and entertainment news.',
            'Technology'    => 'Gadgets, internet, AI and tech developments.',
            'Health'        => 'Health, wellness and medical news.',
            'Education'     => 'Education news, exams, results and scholarships.',
            'World'         => 'International news and global affairs.',
            'Opinion'       => 'Editorials, columns and expert opinions.',
            'Lifestyle'     => 'Travel, food, fashion and everyday living.',
        ];

        foreach ($categories as $title => $description) {
            Category::forceCreate([
                'title' => $title,
                'slug' => Str::slug($title),
                'meta_title' => $title . ' News | Jawaaf',
                'meta_description' => $description,
            ]);
        }
    }
}
