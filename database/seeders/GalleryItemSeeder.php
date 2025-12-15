<?php

namespace Database\Seeders;

use App\Models\GalleryItem;
use Illuminate\Database\Seeder;

class GalleryItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'title' => 'Warung Pagi Hari',
                'description' => 'Suasana legendaris Gudeg Mbok Lindu saat pagi.',
                'image_path' => 'img/gudeg1.jpg',
                'display_order' => 1,
            ],
            [
                'title' => 'Penyajian Gudeg',
                'description' => 'Penyajian gudeg lengkap dengan krecek dan ayam bacem.',
                'image_path' => 'img/gudeg2.jpg',
                'display_order' => 2,
            ],
        ];

        foreach ($items as $item) {
            GalleryItem::updateOrCreate(
                ['title' => $item['title']],
                $item + ['is_active' => true]
            );
        }
    }
}
