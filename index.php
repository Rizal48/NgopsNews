<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                <h1 class="display-4">Selamat Datang, </h1>
                <p class="lead"><b>NgopsNews</b> merupakan tempat berita-berita terhangat yang sedang terjadi di saat ini.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Selengkapnya . .</a>
            </div>
          </div>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- Awal Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 mb-5">
                <div class="card">
                    <img src="img/berita3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-info">Apakah Membicarakan Orang Lain Membatalkan Puasa?</h5>
                      <h6 class="card-text"><a href="berita3.php" class="text-primary">Selengkapnya . . .</a></h5>
                    </div>
                  </div>
            </div>
			
			<div class="col-md-4 mb-4">
                  <!-- Awal Terpopuler -->
                  <h5>Terpopuler</h5>
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
                  <!-- Akhir Toerpopuler -->
                   
            </div>
            <div class="col-md-8 mb-5">
                <div class="card">
                    <img src="img/berita2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-info">5 Golongan Orang yang Boleh Meninggalkan Puasa Ramadhan, Berserta Dalilnya?</h5>
                      <h6 class="card-text"><a href="berita2.php" class="text-primary">Selengkapnya . . .</a></h5>
                    </div>
                  </div>
            </div>
			<div class="col-md-8 mb-5">
                <div class="card">
                    <img src="img/berita1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-info">Mengapa Vaksinasi Harus Dilakukan Dua Kali</h5>
                      <h6 class="card-text"><a href="berita1.php" class="text-primary">Selengkapnya . . .</a></h5>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <!-- Akhir Content -->

    <!-- Awal Pagination -->
	<div class="col-md-7 mb-5">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
	</div>  
    <!-- Akhir Pagination -->

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