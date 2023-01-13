<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Data</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">


</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
  <a class="navbar-brand" href="tampil.php" alt="Inside Blue">  
    <img src="assets/img/office-building.png" width="40" height="40" alt="">
  </a>
  <span class="navbar-brand mb-0 h1" >Inside Blue</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="tampil.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">|</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-5">
	<h3 class="mb-5" >Tambah Data Karyawan</h3>

		<form method="post" action="proses.php?action=add">
			<div class="form-group">
				<label>Nomor Induk Karyawan</label>
				<input type="text" class="form-control" name="nik" placeholder="Masukkan Nomor Induk Karyawan">
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<input type="text" class="form-control" name="jk" placeholder="Masukkan Jenis Kelamin">
				<div class="form-text">*Masukkan "P" untuk Perempuan dan "L" untuk Laki-laki.</div>
			</div>
			<div class="form-group">
				<label>Jabatan</label>
				<input type="text" class="form-control" name="jabatan" placeholder="Masukkan Jabatan">
			</div>
			<button type="submit" class="btn btn-success mt-3" name="save">Simpan</button>
		</form>
</div>
	<!-- Optional JavaScript -->
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>