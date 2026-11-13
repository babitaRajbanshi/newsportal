<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public const IMAGE = 'https://jawaaf.com/storage/01M7ACH5G9GW5B81SNKESVVC75.jpg';

    public function run(): void
    {
        $authorIds = Author::pluck('id')->all();

        $articles = [
            ['Parliament passes new budget bill after long debate', 'Lawmakers approved the annual budget bill after two days of discussion, with focus on infrastructure, health and education spending for the coming fiscal year.'],
            ['Nepal stock market hits new high this week', 'The NEPSE index climbed to its highest level this year as banking and hydropower stocks led gains amid strong investor confidence and rising turnover.'],
            ['National cricket team clinches thrilling series win', 'Nepal sealed the series with a last-over victory, as the batters and bowlers delivered a complete team performance in front of a packed stadium.'],
            ['New Nepali film breaks opening weekend records', 'The latest Nepali release earned record collections across theatres nationwide, drawing praise from critics and audiences for its story and performances.'],
            ['Local startup launches AI-powered learning app', 'A Kathmandu-based startup unveiled a mobile app that uses artificial intelligence to offer personalised lessons for students in Nepali and English.'],
            ['Health ministry warns of rise in seasonal flu cases', 'Officials urge citizens to take precautions as hospitals report an increase in flu patients, advising vaccination, hygiene and early medical consultation.'],
            ['SEE results published, pass rate improves', 'The education board published results with a higher pass rate than last year, and students can check their grades online or through SMS services.'],
            ['Global leaders gather for climate summit', 'World leaders meet to discuss emission targets and climate finance, with Himalayan nations calling for fair support to tackle melting glaciers.'],
            ['Opinion: Why local governance matters more than ever', 'Strong local governments can deliver services faster and more transparently, but only if resources, skills and accountability are matched to their duties.'],
            ['Top five trekking trails to explore this autumn', 'From Annapurna to Langtang, autumn offers clear skies and stunning views. Here are five trails with tips on permits, packing and the best time to go.'],
        ];

        foreach ($articles as $i => [$title, $content]) {
            Article::forceCreate([
                'title' => $title,
                'slug' => Str::slug($title),
                'content' => $content,
                'image' => self::IMAGE,
                'meta_title' => Str::limit($title, 60, ''),
                'meta_description' => Str::limit($content, 150, ''),
                'author_id' => $authorIds[$i % count($authorIds)] ?? null,
            ]);
        }
    }
}
