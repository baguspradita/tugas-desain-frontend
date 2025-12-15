<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $menuItems = MenuItem::query()
            ->where('is_active', true)
            ->latest()
            ->get();

        return view('index', compact('menuItems'));
    }
}
