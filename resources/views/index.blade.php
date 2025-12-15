<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gudeg Mbok Lindu</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- my style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>

  <body>
    <!-- Navbar -->
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

    <!-- hero section -->
    <section id="hero">
      <div class="main-hero">
        <div class="hero-content-img">
          <div class="hero-img">
            <img src="{{ asset('img/heroo.png') }}" alt="" />
          </div>
        </div>

        <div class="hero-content">
          <div class="home-text">
            <h1>Gudeg Mbok Lindu</h1>
            <h4>Gudeg adalah hidangan khas Yogyakarta, Indonesia, terbuat dari nangka muda yang dimasak dengan santan dan rempah-rempah, memberikan rasa manis, gurih, dan lezat.</h4>
          </div>
        </div>
      </div>
    </section>

    <!-- Main -->
    <div class="main">
      <div class="main-text">
        <div class="container">
          <h1>Sejarah <span>Gudeg</span> Khas Yogyakarta: Makanan<br />Raja-Raja & Rakyat Pekerja</h1>
        </div>
      </div>

      <div class="main-video">

        <iframe width="560" height="315" src="https://www.youtube.com/embed/s1LES9kS58I?si=zI4p4QKIsXDLzvmx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


      </div>

    </div>


    <!-- Menu -->
    <div class="menu">
        <h1>Menu<span>Gudeg </span>Mbok Lindu</h1>

      <div class="menu-box">
        @forelse ($menuItems as $item)
        <div class="menu-card">
          <div class="menu-image">
              <img src="{{ $item->image_path ? asset('storage/'.$item->image_path) : asset('img/gudeg1.jpg') }}" alt="{{ $item->name }}" />
          </div>

          <div class="menu-info">
            <h2>{{ $item->name }}</h2>
            <p>{{ $item->description }}</p>
            <h3>Rp.{{ number_format($item->price, 0, ',', '.') }}</h3>
          </div>
        </div>
        @empty
        <p style="text-align: center; width: 100%;">Menu belum tersedia.</p>
        @endforelse
      </div>
    </div>



    <!-- footer -->
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
