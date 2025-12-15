<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artikel | Gudeg Mbok Lindu</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <nav class="navbar">

      <div class="nav-logo">
        <img src="{{ asset('img/logo1.png') }}" alt="">
        <h1>Gudeg Mbok Lindu</h1>
      </div>

      <div class="nav-navibar">
        <a href="{{ route('home') }}">Beranda</a>
        <a href="{{ route('artikel') }}">Artikel</a>
        <a href="{{ route('galeri') }}">Galeri</a>
        <a href="{{ route('map') }}">Map</a>
        <a href="{{ route('login') }}">Login</a>
      </div>
    </nav>

    <div class="page-shell" id="artikel">
      <div class="page-hero">
        <div class="page-hero__content">
          <p class="eyebrow">Kabar Terbaru</p>
          <h2>Artikel Gudeg Mbok Lindu</h2>
          <p class="lead">Cerita, tips, dan kisah di balik rasa manis-gurih khas Yogyakarta.</p>
        </div>
        <div class="page-hero__image">
          <img src="{{ asset('img/jumbotron2.jpeg') }}" alt="">
        </div>
      </div>

      <div class="section-heading">
        <h3>Semua Artikel</h3>
        <p class="muted">Urut terbaru dan terkurasi.</p>
      </div>

      <div class="article-grid">
        @forelse ($articles as $article)
          <article class="article-card">
            <div class="article-card__media">
              @if ($article->image_path)
                <img src="{{ asset('storage/'.$article->image_path) }}" alt="{{ $article->title }}">
              @else
                <div class="article-card__placeholder">Gudeg</div>
              @endif
            </div>
            <div class="article-card__body">
              <div class="article-card__meta">
                <span class="chip">Gudeg Story</span>
                @if ($article->published_at)
                  <span class="muted">{{ $article->published_at->format('d M Y') }}</span>
                @endif
              </div>
              <h4>{{ $article->title }}</h4>
              <p>{{ $article->body }}</p>
            </div>
          </article>
        @empty
          <p class="muted">Belum ada artikel.</p>
        @endforelse
      </div>
    </div>

    <footer>
      <div class="footer-dark">
      <div class="container">
        <div class="row">
          <div class="item">
            <h3>Kontak Kami</h3>
            <ul>
              <li>Alamat: Jl.Sosrowijayan No.41-43,<br> Gudeg Tengen, Kota Yogyakarta 55271.</li>
              <li>Telepon: 085713988883</li>
            </ul>
          </div>

          <div class="item">
            <h3>Jam Operasional</h3>
            <ul>
              <li>Senin - Minggu: 06.00 - 12.00</a></li>
              <!-- <li><a href="#">Sabtu - Minggu: 10.00 - 23.00</a></li> -->
              <li>Hari Libur: Buka sesuai jadwal terkini</li>
            </ul>
          </div>

          <div class="item">
            <h3>Tentang Kami</h3>
            <ul>
              <li>Restoran Gudeg membawa cita rasa lezat<br>dengan bahan-bahan berkualitas.
                <br>Nikmati pengalaman kuliner yang tak terlupakan bersama kami!</li>
            </ul>
          </div>
        </div>

        <p class="copyright" style="text-align: center">Gudeg Mbok Lindu © 2018</p>
      </div>
    </div>
    </footer>

  </body>
</html>
