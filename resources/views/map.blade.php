<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Map | Gudeg Mbok Lindu</title>
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

    <section id="contact" class="contact">
      <h2>M A P</h2>

      <div class="row">

        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.9825555030325!2d110.36264187358046!3d-7.791671177325005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a582663416ea3%3A0xc85acb51a891769b!2sGudeg%20Mbok%20Lindu!5e0!3m2!1sid!2sid!4v1702983623418!5m2!1sid!2sid"

          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"

          class="map"
        ></iframe>
        <p>Alamat: Jl.Sosrowijayan No.41-43, Gudeg Tengen, Kota Yogyakarta 55271.</p>
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
    </footer>
  </div>

    </div>
  </body>
</html>
