<?php 	
include('koneksi.php');
$db = new database();
$data_karyawan = $db->tampil_data();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home - Inside Blue</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet" >
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
      <a class="navbar-brand" href="tampil.php" alt="Inside Blue">  
        <img src="assets/img/office-building.png" width="40" height="40" alt="">
      </a>
      <span class="navbar-brand mb-0 h1">Inside Blue</span>
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
 
    <div class="container mt-5 mb-5">
      <h1>Welcome to Inside Blue!</h1>
      <p>Inside Blue adalah Perusahaan lorem ipsum dolor sit amet consectetur adipisicing elit. Harum similique corrupti natus temporibus dolor reprehenderit dolores, consequuntur minus blanditiis commodi! Velit culpa molestiae quasi sequi enim, ducimus blanditiis soluta saepe. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur rerum doloremque ut, beatae blanditiis dolorum ullam alias consequuntur commodi aperiam veritatis, eveniet voluptas molestias repudiandae. Ipsum quisquam dolor culpa laborum.
      </p>
    </div>

    <div class="container mt-5">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets/img/banner 1.jpg" alt="First slide">   
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/img/banner 2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/img/banner 3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <div class="nav-icon">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </div>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <div class="nav-icon">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </div>
      </a>
    </div>
    </div>

    <div class="container mt-5">
        <h1 class="mb-1">Data Karyawan</h1>
        <p>Berikut adalah data karyawan Inside Blue saat ini.</p>
        <a class="mt-3 mb-3 btn btn-secondary" href="tambah.php" role="button">(+) Tambah Data</a>
        <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">JK</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Action</th>
            </tr>

            <?php 
            $no = 1;
            foreach($data_karyawan as $row){
                ?>
                <tr>
                    <td scope="row"><?php echo $no++; ?></td>
                    <td><?php echo $row['nik']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['jk']; ?></td>
                    <td><?php echo $row['jabatan']; ?></td>
                    <td>
                        <a class="btn btn-success m-1" href="edit.php?id=<?php echo $row['id']; ?>" role="button">
                        <svg style="width:20px;height:20px" viewBox="0 0 24 24" class="mb-1">
                        <path fill="#fff" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12H20A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4V2M18.78,3C18.61,3 18.43,3.07 18.3,3.2L17.08,4.41L19.58,6.91L20.8,5.7C21.06,5.44 21.06,5 20.8,4.75L19.25,3.2C19.12,3.07 18.95,3 18.78,3M16.37,5.12L9,12.5V15H11.5L18.87,7.62L16.37,5.12Z" />
                        </svg>Ubah</a>
                        <a class="btn btn-danger m-1" href="proses.php?action=delete&id=<?php echo $row['id']; ?>" role="button">
                        <svg style="width:20px;height:20px" viewBox="0 0 24 24" class="mb-1">
                        <path fill="#fff" d="M20.37,8.91L19.37,10.64L7.24,3.64L8.24,1.91L11.28,3.66L12.64,3.29L16.97,5.79L17.34,7.16L20.37,8.91M6,19V7H11.07L18,11V19A2,2 0 0,1 16,21H8A2,2 0 0,1 6,19Z" />
                        </svg>Hapus</a>
                    </td>
                </tr>
                <?php 
		    }
		?>
	    </table>
      </div>
    </div>

    <div class="container mt-5">
            <h1 class="mb-1">From Contact Us</h1>
            <p>Here some people need job!</p>
            <div class="table-responsive">
            <table class="table table-striped mt-5 mb-5">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
            <tr>
                <td scope="col">Aruna Maharani</td>
                <td scope="col">maharani27@gmail.com</td>
                <td scope="col"><a class="btn btn-primary m-1 disabled" href="#" role="button" aria-disabled="true">Send Feedback</a>
                </td>
            </tr>
            <tr>
                <td scope="col">Chandra Wijayakusuma</td>
                <td scope="col">chandrakusuma@gmail.com</td>
                <td scope="col"><a class="btn btn-primary m-1 disabled" href="#" role="button" aria-disabled="true">Send Feedback</a>
            </tr>
            </table>
            </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>