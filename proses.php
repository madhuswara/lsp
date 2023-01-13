<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nik'],$_POST['nama'],$_POST['jk'],$_POST['jabatan']);
	header('location:tampil.php');
}
elseif($action=="update")
{
	$koneksi->ubah_data($_POST['nik'],$_POST['nama'],$_POST['jk'],$_POST['jabatan'],$_POST['id']);
	header('location:tampil.php');
}
elseif($action=="delete")
{
	$id = $_GET['id'];
	$koneksi->delete_data($id);
	header('location:tampil.php');
}
?>