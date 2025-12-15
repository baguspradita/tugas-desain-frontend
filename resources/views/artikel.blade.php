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
      </div>
    </nav>

    <div class="content" id="artikel">
      <div class="content-logo">
        <h2>A R T I K E L</h2>
      </div>

    </div>

    <!-- artikel -->
    <section class="about">
      <div class="main-about">

        <div class="about-content">
          <div class="about-inner-content">
            <img src="{{ asset('img/jumbotron2.jpeg') }}" alt="" />
          </div>
        </div>

        <div class="about-content">
          <div class="about-inner-content">
            <div class="about-text">
              <p>
                Gudeg Mbok Lindu adalah salah satu hidangan khas Yogyakarta yang telah menjadi warisan kuliner leluhur. Mbok Lindu, sebagai penjual gudeg yang legendaris, telah menjaga tradisi kuliner ini selama beberapa generasi. Gudeg
                sendiri adalah masakan yang terbuat dari nangka muda yang dimasak dalam kuah santan dengan rempah-rempah khas Jawa. Mbok Lindu menjadikan gudegnya istimewa dengan racikan bumbu rahasia turun temurun, menciptakan cita rasa
                yang unik dan tak terlupakan.
              </p>
            </div>
          </div>
        </div>

      </div>

      <div class="main-about">
        <div class="about-content">
          <div class="about-inner-content">
            <div class="about-text">
              <p>
                Rasa gudeg Mbok Lindu begitu khas dan otentik, menggambarkan kearifan lokal dan kecintaan pada tradisi kuliner Jawa. Selain nangka muda, dalam hidangannya terdapat telur, ayam, serta sambal krecek yang menambah kompleksitas
                rasa. Kelezatan gudeg Mbok Lindu tidak hanya terletak pada rasa yang lezat, tetapi juga pada atmosfer tradisional yang tercipta di sekitar tempat makan. Pengunjung dapat merasakan sentuhan sejarah dan kehangatan kehidupan
                kota Yogyakarta yang membumi.
              </p>
            </div>
          </div>
        </div>
        <div class="about-content">
          <div class="about-inner-content">
              <img src="{{ asset('img/artikel.png') }}" alt="" />
          </div>
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
