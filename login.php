<?php 
session_start();
include_once('koneksi.php');
$database = new database();

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($database->login($username,$password))
    {
      header('location:tampil.php');
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="">
  <img class="mb-4" src="assets/img/office-building.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Log In</h1>
  <label for="username" class="sr-only">Username</label>
  <input type="text" id="username" class="form-control" placeholder="Username" name="username" required autofocus>
  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>

  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Log In</button>
  <p class="mt-3 message">Not Admin? <a href="welcome.php">Click This!</a></p>
  <p class="mt-5 mb-3 text-muted">Inside Blue &copy; Madhuswara XI RPL 2</p>
</form>
    <!-- Optional JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>