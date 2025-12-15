<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Gudeg</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body { margin:0; font-family: Arial, sans-serif; background:#f8fafc; color:#0f172a; }
        header { background:#0f172a; color:#fff; padding:14px 20px; display:flex; align-items:center; justify-content:space-between; }
        nav a { color:#e2e8f0; margin-right:12px; text-decoration:none; font-weight:600; }
        nav a.active { color:#38bdf8; }
        .container { padding:24px; max-width:1100px; margin:0 auto; }
        .card { background:#fff; border:1px solid #e2e8f0; border-radius:12px; padding:20px; box-shadow:0 6px 20px rgba(15,23,42,0.06); margin-bottom:20px; }
        .table { width:100%; border-collapse:collapse; }
        .table th, .table td { padding:10px 8px; border-bottom:1px solid #e2e8f0; text-align:left; }
        .table th { background:#f1f5f9; }
        .btn { display:inline-block; padding:8px 12px; border-radius:8px; border:1px solid transparent; text-decoration:none; font-weight:700; font-size:14px; cursor:pointer; }
        .btn-primary { background:#0f172a; color:#fff; }
        .btn-secondary { background:#e2e8f0; color:#0f172a; }
        .btn-danger { background:#ef4444; color:#fff; }
        .btn-link { background:transparent; border:none; color:#ef4444; cursor:pointer; font-weight:700; }
        form.inline { display:inline; }
        label { display:block; font-weight:600; margin-bottom:6px; }
        input, textarea { width:100%; padding:10px; border:1px solid #cbd5e1; border-radius:8px; font-size:14px; }
        input[type="checkbox"] { width:auto; }
        .row { display:flex; gap:16px; flex-wrap:wrap; }
        .col { flex:1 1 260px; }
        .status { padding:10px 12px; border-radius:8px; background:#ecfeff; color:#0ea5e9; border:1px solid #bae6fd; margin-bottom:12px; }
    </style>
</head>
<body>
    <header>
        <div style="font-weight:800; letter-spacing:0.5px;">Admin Gudeg</div>
        <nav>
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('admin.menu-items.index') }}" class="{{ request()->routeIs('admin.menu-items.*') ? 'active' : '' }}">Menu</a>
            <a href="{{ route('admin.articles.index') }}" class="{{ request()->routeIs('admin.articles.*') ? 'active' : '' }}">Artikel</a>
            <a href="{{ route('admin.galleries.index') }}" class="{{ request()->routeIs('admin.galleries.*') ? 'active' : '' }}">Galeri</a>
        </nav>
        <form method="POST" action="{{ route('logout') }}" style="margin:0;">
            @csrf
            <button type="submit" class="btn btn-secondary">Logout</button>
        </form>
    </header>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
