<?php 	
include('koneksi.php');
$db = new database();
$id = $_GET['id'];
if(! is_null($id))
{
	$data_karyawan = $db->get_by_id($id);
}
else
{
	header('location:tampil.php');
}
?>

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
	<h3 class="mb-5" >Ubah Data Karyawan</h3>

		<form method="post" action="proses.php?action=update">
        <input type="hidden" name="id" value="<?php echo $data_karyawan['id']; ?>"/>
			<div class="form-group">
				<label>Nomor Induk Karyawan</label>
				<input type="text" class="form-control" name="nik" placeholder="Masukkan Nomor Induk Karyawan" value="<?php echo $data_karyawan['nik']; ?>">
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap" value="<?php echo $data_karyawan['nama']; ?>">
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<input type="text" class="form-control" name="jk" placeholder="Masukkan Jenis Kelamin" value="<?php echo $data_karyawan['jk']; ?>">
				<div class="form-text">*Masukkan "P" untuk Perempuan dan "L" untuk Laki-laki.</div>
			</div>
			<div class="form-group">
				<label>Jabatan</label>
				<input type="text" class="form-control" name="jabatan" placeholder="Masukkan Jabatan" value="<?php echo $data_karyawan['jabatan']; ?>">
			</div>
			<button type="submit" name="tombol" class="btn btn-success mt-3">Simpan Perubahan</button>
		</form>
</div>
	<!-- Optional JavaScript -->
	<script src="assets/js/bootstrap.min.js"></script>
    <!-- /.container -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</body>
</html>