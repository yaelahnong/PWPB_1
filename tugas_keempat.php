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
    <link rel="shortcut icon" href="img/logo.png">
    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
		.content{
			width : 100%;
		}
		
		.content h1{
			position : relative;
			left : -299px; 
		}
		
		.content table{
			position : relative;
			left : 160px;
		}
		
    </style>
    <!-- Custom styles for this template -->
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Kelompok 9</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="tugas_pertama.php">Tugas pertama</a>
    <a class="p-2 text-dark" href="tugas_kedua.php">Tugas kedua</a>
    <a class="p-2 text-dark" href="tugas_ketiga.php">Tugas ketiga</a>
    <a class="p-2 text-dark" href="tugas_keempat.php">Tugas keempat</a>
  </nav>
  <a class="btn btn-outline-success" href="index.php">Home</a>
</div>

<!-- AWAL CONTENT -->
<div class="container text-center">
<?php
	require 'functions.php';
	
	$siswa = query("SELECT * FROM data_siswa");
?>

	<section class="content mt-5">
		<h1 class="display-5 mb-3">Data Siswa</h1>
			<table cellpadding="20">
				<tr class="bg-dark text-light">
					<th>No.</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Kelas</th>
					<th>Alamat</th>
					<th colspan="2">Action</th>
				</tr>
		
		<?php $i = 1;?>
		<?php foreach($siswa as $row) :?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $row["NIS"]; ?></td>
					<td><?= $row["nama"]; ?></td>
					<td><?= $row["jenis_kelamin"]; ?></td>
					<td><?= $row["kelas"]; ?></td>
					<td><?= $row["alamat"]; ?></td>
					<td>
						<a class="btn btn-warning" href="ubah.php?id=<?= $row['id_siswa']; ?>">Ubah</a>
						<a class="btn btn-danger" href="hapus.php?id=<?= $row['id_siswa']; ?>">Hapus</a>
					</td>
				</tr>
		<?php $i++; ?> 
		<?php endforeach; ?>
			</table>
		<a href="tambah.php" class="btn btn-dark mt-5" style="position : relative; left : 20px;">Tambah Siswa</a>
	</section>
			
</div>
<!-- AKHIR CONTENT -->


<div class="container">
  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-muted">&copy; 2019</small>
        <p class="lead">#PWPB_XIRPL3</p>
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
