<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    public function index(): JsonResponse
    {
        $items = MenuItem::orderBy('display_order')
            ->orderBy('name')
            ->get();

        return response()->json(['data' => $items]);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $this->validated($request);

        $item = MenuItem::create($data);

        return response()->json([
            'message' => 'Menu item created.',
            'data' => $item,
        ], 201);
    }

    public function show(MenuItem $menuItem): JsonResponse
    {
        return response()->json(['data' => $menuItem]);
    }

    public function update(Request $request, MenuItem $menuItem): JsonResponse
    {
        $data = $this->validated($request, true);

        $menuItem->update($data);

        return response()->json([
            'message' => 'Menu item updated.',
            'data' => $menuItem,
        ]);
    }

    public function destroy(MenuItem $menuItem): JsonResponse
    {
        $menuItem->delete();

        return response()->json([
            'message' => 'Menu item deleted.',
        ]);
    }

    private function validated(Request $request, bool $isUpdate = false): array
    {
        return $request->validate([
            'name' => [$isUpdate ? 'sometimes' : 'required', 'string', 'max:255'],
            'description' => ['sometimes', 'nullable', 'string'],
            'price' => [$isUpdate ? 'sometimes' : 'required', 'numeric', 'min:0'],
            'image_path' => ['sometimes', 'nullable', 'string', 'max:255'],
            'is_active' => ['sometimes', 'boolean'],
            'display_order' => ['sometimes', 'integer', 'min:0'],
        ]);
    }
}
