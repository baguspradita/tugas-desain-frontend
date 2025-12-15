@extends('admin.layout')

@section('content')
    @if (session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif

    <div class="card">
        <h3 style="margin-top:0;">Edit Artikel</h3>
        <form method="POST" action="{{ route('admin.articles.update', $article) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label>Judul</label>
            <input name="title" value="{{ old('title', $article->title) }}" required>

            <label style="margin-top:10px;">Konten</label>
            <textarea name="body" rows="5" required>{{ old('body', $article->body) }}</textarea>

            <label style="margin-top:10px;">Gambar</label>
            <input type="file" name="image" accept="image/*">
            @if ($article->image_path)
                <small>Gambar sekarang: {{ $article->image_path }}</small>
            @endif

            <label style="margin-top:10px;">Tanggal Publikasi</label>
            <input type="datetime-local" name="published_at" value="{{ old('published_at', optional($article->published_at)->format('Y-m-d\TH:i')) }}">

            <label style="margin-top:10px;">Urutan</label>
            <input type="number" name="display_order" min="0" value="{{ old('display_order', $article->display_order) }}">

            <label style="margin-top:10px; display:flex; align-items:center; gap:8px;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $article->is_active) ? 'checked' : '' }}> Aktif
            </label>

            <div style="margin-top:12px; display:flex; gap:10px;">
                <button class="btn btn-primary" type="submit">Update</button>
                <a class="btn btn-secondary" href="{{ route('admin.articles.index') }}">Kembali</a>
            </div>
        </form>
    </div>
@endsection
