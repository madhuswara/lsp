<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "db_insideblue";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function login($username,$password)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
		if(mysqli_num_rows($query)!=0){
			$data_user = $query->fetch_array();
			return true;
		}else{
			echo "<div class=\"alert alert-danger\" role=\"alert\">Maaf, Anda Bukan Admin.</div>";
			return false;
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_karyawan");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

    function tambah_data($nik,$nama,$jk,$jabatan)
	{
		mysqli_query($this->koneksi,"insert into tb_karyawan values ('','$nik','$nama','$jk','$jabatan')");
	}

    function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_karyawan where id='$id'");
		return $query->fetch_array();
	}

    function ubah_data($nik,$nama,$jk,$jabatan,$id)
	{
		$query = mysqli_query($this->koneksi,"update tb_karyawan set nik='$nik',nama='$nama',jk='$jk',jabatan='$jabatan' where id='$id'");
	}

    function delete_data($id)
	{
		$query = mysqli_query($this->koneksi,"delete from tb_karyawan where id='$id'");
	}
}

?>