<?php
	include 'koneksi.php';
	if(isset($_GET['id'])){
		$dbh->exec("DELETE FROM tb_mahasiswa WHERE id = '$_GET[id]' ");
	}
	header("location:index.php")

 ?>