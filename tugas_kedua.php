<?php 
  $nama_satu = "Marino imola";
  $umur_satu = 15;
  $hobi_satu = "main musik, main game";
  $tinggi_satu = 170;
  
  $nama_dua = "Mahyuni";
  $umur_dua = 15;
  $hobi_dua = "berenang,masak";
  $tinggi_dua = 160;

  $nama_tiga = "Salsabila Fauziah Khalda";
  $umur_tiga = 16;
  $hobi_tiga = "makan";
  $tinggi_tiga = 160;

  $rata_rata = ($tinggi_satu + $tinggi_dua + $tinggi_tiga) / 3;

  const luas_kubus = "L = 6 x s²";
  const volume_tetrahedron = "V = 1/3 x Lsegitiga x Tlimas";
  const luas_kerucut = "L = πr (r + s)";
  const luas_balok = "L = 2 (p x l + p x t +  l x t)";
  const luas_prisma = "L = t × ( a1 + a2 + a3) + (2 × La)";
  const volume_limas_segiempat = "V = ⅓ × L alas × t";
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Tugas PWPB</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/Bootstrap.min.css">

    <!-- LOGO AS -->
    <link rel="icon" href="assets/img/logo.png">
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
    <style>
      .bangun-ruang{
        width: 200px;
      }
    </style>
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Kelompok 9</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="tugas_pertama.php">Tugas pertama</a>
    <a class="p-2 text-dark" href="tugas_kedua.php">Tugas kedua</a>
    <a class="p-2 text-dark" href="#">Tugas ketiga</a>
    <a class="p-2 text-dark" href="#">Tugas keempat</a>
  </nav>
  <a class="btn btn-outline-success" href="index.php">Home</a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Tugas kedua</h1>
  <p class="lead">dibawah ini adalah kumpulan bangun ruang</p>
</div>

<div class="container">
    <div class="card-deck mb-3 text-center">
    <!-- BARIS PERTAMA -->
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
          <img src="assets/img/kubus.gif" class="card-img-top">
            <p class="card-text bg-light">Luas</p>
            <p class="card-text bg-light"><?php echo luas_kubus; ?></p>
          <button type="button" class="btn btn-lg btn-block btn-success">Lebih lanjut</button>
        </div>
      </div>

      <div class="card mb-4 shadow-sm"> 
        <div class="card-body">
          <img src="assets/img/tetrahedron.gif" width="150px" class="card-img-top">
          <p class="card-text bg-light">Volume</p>
          <p class="card-text bg-light"><?php echo volume_tetrahedron; ?></p>
          <button type="button" class="btn btn-lg btn-block btn-success">Lebih lanjut</button>
        </div>
      </div>

      <div class="card mb-4 shadow-sm">
        <div class="card-body">
          <img src="assets/img/kerucut.gif" width="150px" class="card-img-top">
          <p class="card-text bg-light">Luas</p>
          <p class="card-text bg-light"><?php echo luas_kerucut; ?></p>
          <button type="button" class="btn btn-lg btn-block btn-success">Lebih lanjut</button>
        </div>
      </div>
    </div>
    <!-- END OF BARIS PERTAMA -->

    <!-- BARIS KEDUA -->
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <img src="assets/img/balok.gif" width="150px" class="card-img-top">
            <p class="card-text bg-light">Luas</p>
            <p class="card-text bg-light"><?php echo luas_balok; ?></p>
            <button type="button" class="btn btn-lg btn-block btn-success">Lebih lanjut</button>
          </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <!-- GAMBAR LO -->
          <img src="assets/img/prisma.gif" width="150px" class="card-img-top">     
           <p class="card-text bg-light">Luas</p>
           <p class="card-text bg-light"><?php echo luas_prisma?></p>
          <button type="button" class="btn btn-lg btn-block btn-success">Lebih lanjut</button>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <!-- GAMBAR LO -->
          <img src="assets/img/limas_segiempat.gif" style="max-width: 100%" height="auto">
            <p class="card-text bg-light">Luas</p>
            <p class="card-text bg-light"><?php echo volume_limas_segiempat; ?></p>
          <button type="button" class="btn btn-lg btn-block btn-success">Lebih lanjut</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END OF BARIS KEDUA -->
  <div class="pricing-header px-2 py-2 pt-md-2 pb-md-2 mx-auto text-center">
    <p class="lead">Rata-rata tinggi kami = <?php printf("%.1f", $rata_rata) ?></p>
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
        <p class="lead">#PWPB_1</p>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
</body>
</html>
