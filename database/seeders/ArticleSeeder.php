<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Sejarah Gudeg Mbok Lindu',
                'body' => 'Gudeg Mbok Lindu adalah ikon kuliner Yogyakarta yang sudah ada sejak era 1940-an.',
                'image_path' => 'img/gudeg1.jpg',
                'published_at' => Carbon::now()->subDays(3),
                'display_order' => 1,
            ],
            [
                'title' => 'Rahasia Rasa Manis Gurih',
                'body' => 'Perpaduan nangka muda, santan, dan rempah menjadi kunci cita rasa khas.',
                'image_path' => 'img/gudeg2.jpg',
                'published_at' => Carbon::now()->subDays(1),
                'display_order' => 2,
            ],
        ];

        foreach ($articles as $article) {
            Article::updateOrCreate(
                ['title' => $article['title']],
                $article + ['is_active' => true]
            );
        }
    }
}
