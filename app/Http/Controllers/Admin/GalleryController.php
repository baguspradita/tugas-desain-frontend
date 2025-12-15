<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index(): View
    {
        $items = GalleryItem::orderBy('title')
            ->get();

        return view('admin.galleries.index', compact('items'));
    }

    public function create(): RedirectResponse
    {
        return redirect()->route('admin.galleries.index');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);

        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('uploads/galleries', 'public');
        }

        GalleryItem::create($data);

        return redirect()
            ->route('admin.galleries.index')
            ->with('status', 'Galeri dibuat.');
    }

    public function edit(GalleryItem $gallery): View
    {
        return view('admin.galleries.edit', ['item' => $gallery]);
    }

    public function update(Request $request, GalleryItem $gallery): RedirectResponse
    {
        $data = $this->validated($request, true);

        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            if ($gallery->image_path) {
                Storage::disk('public')->delete($gallery->image_path);
            }
            $data['image_path'] = $request->file('image')->store('uploads/galleries', 'public');
        }

        $gallery->update($data);

        return redirect()
            ->route('admin.galleries.index')
            ->with('status', 'Galeri diperbarui.');
    }

    public function destroy(GalleryItem $gallery): RedirectResponse
    {
        $gallery->delete();

        return redirect()
            ->route('admin.galleries.index')
            ->with('status', 'Galeri dihapus.');
    }

    private function validated(Request $request, bool $isUpdate = false): array
    {
        return $request->validate([
            'title' => [$isUpdate ? 'sometimes' : 'required', 'string', 'max:255'],
            'description' => ['sometimes', 'nullable', 'string'],
            'image' => [$isUpdate ? 'sometimes' : 'nullable', 'image', 'max:2048'],
            'is_active' => ['sometimes', 'boolean'],
            // display_order disabled
        ]);
    }
}
