<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
	<title>update</title>
</head>
<body>
<?php
include 'koneksi.php';
if(isset($_GET['id'])){
	$query = $dbh->query("SELECT * FROM tb_mahasiswa WHERE id = '$_GET[id]' ");
	$data = $query->fetch(PDO::FETCH_ASSOC);
}else{
	echo " ID tidak tersedia!<br/><a href='index.php'>kembali</a>  ";
	exit();
}

if($data === false){
	echo "data tidak ditemukan!<br/><a href='index.php'>kembali</a>";
	exit();
}
?>
<div class="w3-card-4 w3-center w3-margin w3-white">

<h1>UPDATE DATA MAHASISWA</h1>
	
	<form action="update.php" method="post">
	<input type="hidden" name="id" value="<?php echo $data['id']; ?> ">
	<label for="npm">NPM</label><br>
	<input type="text" name="npm" id="npm" value="<?php echo $data['npm']; ?> " ><br>
	<label for="nama">Nama Lengkap</label><br>
	<input type="text" name="nama" id="nama" value="<?php echo $data['nama']; ?> "><br>
	<label for="tempat_lahir">Tempat lahir</label><br>
	<input type="text" name="tempat_lahir" id="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?> "><br>
	<label for="tanggal_lahir">Tanggal lahir</label><br>
	<input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?> "><br>
	<p><label for="jenis_kelamin">Jenis kelamin</label><br>
		<?php if($data['jenis_kelamin'] == "perempuan") :?>
	<input type="radio" name="jenis_kelamin" id="perempuan" value="perempuan"><label for="jenis_kelamin">perempuan</label>
	<input type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki"><label for="jenis_kelamin">laki-laki</label>
		<?php else :?>
	<input type="radio" name="jenis_kelamin" id="perempuan" value="perempuan"><label for="jenis_kelamin">perempuan</label>
	<input type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki"><label for="jenis_kelamin">laki-laki</label>
		<?php endif; ?>
	</p><br>
	<label for="alamat">Alamat</label><br>
	<input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?> "><br>
	<label for="kode_pos">Kode pos</label><br>
	<input type="text" name="kode_pos" id="kode_pos" value="<?php echo $data['kode_pos']; ?> "><br>

	<input type="submit" value="simpan"/>

	</form>

</body>
</html>