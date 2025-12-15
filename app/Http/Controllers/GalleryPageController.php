<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use Illuminate\View\View;

class GalleryPageController extends Controller
{
    public function __invoke(): View
    {
        $items = GalleryItem::query()
            ->where('is_active', true)
            ->orderBy('display_order')
            ->orderBy('title')
            ->get();

        return view('galeri', compact('items'));
    }
}
