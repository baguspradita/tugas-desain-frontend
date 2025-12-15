<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body { font-family: Arial, sans-serif; background: #f8fafc; margin: 0; padding: 0; }
        .container { max-width: 420px; margin: 64px auto; background: #ffffff; border-radius: 12px; box-shadow: 0 10px 30px rgba(15,23,42,0.08); padding: 32px; }
        h1 { margin: 0 0 24px; font-size: 24px; color: #0f172a; text-align: center; }
        label { display: block; margin-bottom: 6px; font-weight: 600; color: #0f172a; }
        input[type="email"], input[type="password"] { width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 14px; }
        .actions { display: flex; align-items: center; justify-content: space-between; margin-top: 16px; }
        button { background: #0f172a; color: #ffffff; border: none; padding: 12px 16px; border-radius: 8px; cursor: pointer; font-weight: 700; width: 100%; margin-top: 16px; }
        button:hover { background: #111827; }
        .error { background: #fef2f2; color: #b91c1c; padding: 10px 12px; border-radius: 8px; margin-bottom: 16px; border: 1px solid #fecdd3; }
        .remember { display: flex; align-items: center; gap: 8px; }
        a { color: #0ea5e9; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login Admin</h1>
        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            <div style="margin-top: 16px;">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
            </div>
            <div class="actions">
                <label class="remember">
                    <input type="checkbox" name="remember" value="1"> Ingat saya
                </label>
                <a href="{{ route('home') }}">Kembali</a>
            </div>
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>
