<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'name' => 'Ayam Bacem',
                'description' => 'Ayam dimasak dengan bumbu manis gurih khas gudeg.',
                'price' => 25000,
                'image_path' => 'img/gudeg1.jpg',
                'display_order' => 1,
            ],
            [
                'name' => 'Tahu Bacem',
                'description' => 'Tahu goreng yang direbus dalam bumbu gudeg.',
                'price' => 15000,
                'image_path' => 'img/gudeg2.jpg',
                'display_order' => 2,
            ],
            [
                'name' => 'Sambal Krecek',
                'description' => 'Kulit sapi dengan bumbu pedas gurih pendamping gudeg.',
                'price' => 10000,
                'image_path' => 'img/krecek.jpg',
                'display_order' => 3,
            ],
        ];

        foreach ($items as $item) {
            MenuItem::updateOrCreate(
                ['name' => $item['name']],
                $item + ['is_active' => true]
            );
        }
    }
}
