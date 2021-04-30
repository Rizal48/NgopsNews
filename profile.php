<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>NgopNews | Selamat Datang</title>
  </head>
  <body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php"><b>Ngop</b>News</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="profile.php">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak.php">Kontak</a>
                    </li>

                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>
        </div>
    </header>

    <!-- Awal Jumbotron -->
    <section class="jumbotron-bg">
        <div class="jumbotron warna-bg text-white">
            <div class="container">
                <h1 class="display-4">Profil</h1>

            </div>
          </div>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- Awal Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 mb-5">
                <div class="card">
                    <div class="card-body">
                      <h2>Profil</h2>
                      <img src="img/3x4.jpg" class="foto">
                      <p>Hai Semuanya, perkenalkan nama saya Rizal.</p>
                      <p>Saya adalah seorang mahasiswa dari Universitas Muhammadiyah Malang</p>
                      <p>Saya adalah seorang pemula di dunia website. Website ini dibuat teruntuk menyelesaikan UTS saya di pelajaran Pemrograman Web</p>
                      <p>Jadi mohon maaf bila ada tutur kata yang salah selama website ini dibuat. Terima Kasih...</p>
                    </div>
                  </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card mb-4">
                    <div class="card-body bg-light">
                      <h5>Ingin mengetahui tentang aku lebih dalam?</h5>
                      <p>Silahkan, bila ada yang di ingin ditanyakan lebih lanjut bisa langsung kirim pesan 
                        lewat email disini...</p>
                      <form>
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="*nama">
                          </div>
                          <div class="form-group">
                            <input type="email" class="form-control" placeholder="*email">
                          </div>
                          <button class="btn btn-primary">Kirim</button>
                      </form>
                    </div>
                  </div>

                  <!-- Awal Topik Terbaru -->
                  <h5>Terbaru</h5>
                  <div class="list-group">
                    <a href="berita1.php" class="list-group-item list-group-item-action active">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Mengapa Vaksinasi Harus Dilakukan Dua Kali</h5>
                        <small>3 days ago</small>
                      </div>
                      <p class="mb-1">Vaksinasi adalah suatu cara untuk meningkatkan kekebalan seseorang . . .</p>
                      <small>Berita Baru</small>
                    </a>
                    <a href="berita2.php" class="list-group-item list-group-item-action">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">5 Golongan Orang yang Boleh Meninggalkan Puasa Ramadhan, Berserta Dalilnya</h5>
                        <small class="text-muted">4 days ago</small>
                      </div>
                      <p class="mb-1">Golongan orang yang boleh meninggalkan puasa Ramadan perlu diketahui . . .</p>
                      <small class="text-muted">Berita Baru.</small>
                    </a>
                    <a href="berita3.php" class="list-group-item list-group-item-action">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Apakah Membicarakan Orang Lain Membatalkan Puasa?</h5>
                        <small class="text-muted">5 days ago</small>
                      </div>
                      <p class="mb-1">Salah satu hakikat puasa adalah menahan dari segala hal yang . . .</p>
                      <small class="text-muted">Berita Baru.</small>
                    </a>
                  </div>
                  <!-- Akhir Topik Terbaru -->
                   
            </div>
        </div>
    </div>
    <!-- Akhir Content -->


    <!-- Awal Jumbotron 2 -->
    <div class="jumbotron jumbotron-fluid bg-light">
        <div class="container">
            <div class="row">   
                <div class="col-md-9">
                    <h2 class="display-7">Jelajahi Lebih Jauh :</h2>
                    <p class="lead"><a href="index.php">- Berita</a></p>    
                </div>
            </div>    
        </div>
      </div>
    <!-- Akhir Jumbotron 2 -->

    <!-- Awal Footer -->
      <footer class="warna-bg">
          <div class="text-white text-center pt-3 pb-3">
              Copyright @2021 - NobeNgoding
          </div>
      </footer>
    <!-- Akhir Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>