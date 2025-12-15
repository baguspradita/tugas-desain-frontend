@extends('admin.layout')

@section('content')
    @if (session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif

    <div class="row">
        <div class="col">
            <div class="card">
                <h3 style="margin-top:0;">Tambah Galeri</h3>
                <form method="POST" action="{{ route('admin.galleries.store') }}" enctype="multipart/form-data">
                    @csrf
                    <label>Judul</label>
                    <input name="title" value="{{ old('title') }}" required>

                    <label style="margin-top:10px;">Deskripsi</label>
                    <textarea name="description" rows="3">{{ old('description') }}</textarea>

                    <label style="margin-top:10px;">Gambar</label>
                    <input type="file" name="image" accept="image/*">

                    <label style="margin-top:10px;">Urutan</label>
                    <input type="number" name="display_order" min="0" value="{{ old('display_order', 0) }}">

                    <label style="margin-top:10px; display:flex; align-items:center; gap:8px;">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}> Aktif
                    </label>

                    <button class="btn btn-primary" style="margin-top:12px;" type="submit">Simpan</button>
                </form>
            </div>
        </div>

        <div class="col" style="flex:2 1 500px;">
            <div class="card">
                <h3 style="margin-top:0;">Daftar Galeri</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Aktif</th>
                            <th>Urutan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->is_active ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ $item->display_order }}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{ route('admin.galleries.edit', $item) }}">Edit</a>
                                    <form class="inline" method="POST" action="{{ route('admin.galleries.destroy', $item) }}" onsubmit="return confirm('Hapus galeri ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-link" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="4">Belum ada data.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
