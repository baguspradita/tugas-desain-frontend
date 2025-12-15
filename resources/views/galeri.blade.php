<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galeri | Gudeg Mbok Lindu</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
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
      </div>
    </nav>

    <section id="produk1">
      <div class="produk-logo">
        <h2>G A L E R I</h2>
      </div>

      <div class="pro-container">
        <div class="pro">
          <img src="{{ asset('img/jumbotron2.jpeg') }}" alt="" />
        </div>

        <div class="pro">
          <img src="{{ asset('img/jumbotron1.jpeg') }}" alt="" />
        </div>

        <div class="pro">
          <img src="{{ asset('img/galeri3.png') }}" alt="" />
        </div>

        <div class="pro">
          <img src="{{ asset('img/jumbotron3.jpeg') }}" alt="" />
        </div>

        <div class="pro">
          <img src="{{ asset('img/galeri5.png') }}" alt="" />
        </div>

        <div class="pro">
          <img src="{{ asset('img/galeri2.png') }}" alt="" />
        </div>

        <div class="pro">
          <img src="{{ asset('img/galeri1.png') }}" alt="" />
        </div>

        <div class="pro">
          <img src="{{ asset('img/galeri4.png') }}" alt="" />
        </div>

      </div>
    </section>

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
