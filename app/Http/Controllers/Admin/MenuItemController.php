<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class MenuItemController extends Controller
{
    public function index(): View
    {
        $items = MenuItem::orderBy('display_order')
            ->orderBy('name')
            ->get();

        return view('admin.menu.index', compact('items'));
    }

    public function create(): RedirectResponse
    {
        return redirect()->route('admin.menu-items.index');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);

        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('uploads/menu', 'public');
        }

        MenuItem::create($data);

        return redirect()
            ->route('admin.menu-items.index')
            ->with('status', 'Menu item berhasil dibuat.');
    }

    public function edit(MenuItem $menu_item): View
    {
        return view('admin.menu.edit', ['item' => $menu_item]);
    }

    public function update(Request $request, MenuItem $menu_item): RedirectResponse
    {
        $data = $this->validated($request, true);

        $data['is_active'] = $request->boolean('is_active', $menu_item->is_active);

        if ($request->hasFile('image')) {
            if ($menu_item->image_path) {
                Storage::disk('public')->delete($menu_item->image_path);
            }
            $data['image_path'] = $request->file('image')->store('uploads/menu', 'public');
        }

        $menu_item->update($data);

        return redirect()
            ->route('admin.menu-items.index')
            ->with('status', 'Menu item diperbarui.');
    }

    public function destroy(MenuItem $menu_item): RedirectResponse
    {
        $menu_item->delete();

        return redirect()
            ->route('admin.menu-items.index')
            ->with('status', 'Menu item dihapus.');
    }

    private function validated(Request $request, bool $isUpdate = false): array
    {
        return $request->validate([
            'name' => [$isUpdate ? 'sometimes' : 'required', 'string', 'max:255'],
            'description' => ['sometimes', 'nullable', 'string'],
            'price' => [$isUpdate ? 'sometimes' : 'required', 'numeric', 'min:0'],
            'image' => [$isUpdate ? 'sometimes' : 'nullable', 'image', 'max:2048'],
            'is_active' => ['sometimes', 'boolean'],
            'display_order' => ['sometimes', 'integer', 'min:0'],
        ]);
    }
}
