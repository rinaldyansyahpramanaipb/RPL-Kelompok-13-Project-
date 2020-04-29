<?php
include("config.php");
if(isset($_POST['daftar'])){

	$nama = $_POST['nama'];
	$nik = $_POST['nik'];
	$alamat = $_POST['alamat'];
	$pw = $_POST['pswd'];
	$pwbr = $_POST['newpswd'];


  	$query = pg_query("INSERT INTO pelayanan (nama, nik, alamat, pswd, newpswd) VALUEs ('$nama', '$nik', '$alamat', '$pw', '$pwbr')");

	if( $query==TRUE ) {
		header('Location: index.php?status=sukses');
	} else {
		header('Location: index.php?status=gagal');
	}


} else {
	die("Akses dilarang...");
}
?>
