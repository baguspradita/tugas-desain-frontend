@extends('admin.layout')

@section('content')
    @if (session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif

    <div class="card">
        <h3 style="margin-top:0;">Edit Menu</h3>
        <form method="POST" action="{{ route('admin.menu-items.update', $item) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label>Nama</label>
            <input name="name" value="{{ old('name', $item->name) }}" required>

            <label style="margin-top:10px;">Deskripsi</label>
            <textarea name="description" rows="3">{{ old('description', $item->description) }}</textarea>

            <label style="margin-top:10px;">Harga</label>
            <input type="number" name="price" step="0.01" min="0" value="{{ old('price', $item->price) }}" required>

            <label style="margin-top:10px;">Gambar</label>
            <input type="file" name="image" accept="image/*">
            @if ($item->image_path)
                <small>Gambar sekarang: {{ $item->image_path }}</small>
            @endif

            <label style="margin-top:10px; display:flex; align-items:center; gap:8px;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $item->is_active) ? 'checked' : '' }}> Aktif
            </label>

            <div style="margin-top:12px; display:flex; gap:10px;">
                <button class="btn btn-primary" type="submit">Update</button>
                <a class="btn btn-secondary" href="{{ route('admin.menu-items.index') }}">Kembali</a>
            </div>
        </form>
    </div>
@endsection
