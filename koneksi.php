<?php
	$dsn = "mysql:dbname=data;host=localhost";
	$user = "root";
	$pass = "";

	try{
		$dbh= new PDO($dsn,$user,$pass);
	} catch (PDOException $e) {
		echo "koneksi gagal:". $e->getmessage();
	}
?>