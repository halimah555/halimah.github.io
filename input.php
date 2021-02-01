<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
	<title>input data</title>
</head>
<body>
	<div class="w3-card-4 w3-center w3-margin w3-dark-grey w3-white">
	<h1>INPUT DATA MAHASISWA</h1><br><hr>

	<form action="simpan.php" method="post">
	<label for="npm">NPM</label><br>
	<input type="text" name="npm" id="npm" placeholder="masukan npm kamu.."><br>
	<label for="nama">Nama Lengkap</label><br>
	<input type="text" name="nama" id="nama" placeholder="masukan nama lengkap kamu.."><br>
	<label for="tempat_lahir">Tempat lahir</label><br>
	<input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="masukan tempat lahir kamu.."><br>
	<label for="tanggal_lahir">Tanggal lahir</label><br>
	<input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="masukan tanggal lahir kamu.."><br>
	<p><label for="jenis_kelamin">Jenis kelamin</label><br>
	<input type="radio" name="jenis_kelamin" id="perempuan" value="perempuan"><label for="jenis_kelamin">perempuan</label>
	<input type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" ><label for="jenis_kelamin">laki-laki</label>
	</p><br>
	<label for="alamat">Alamat</label><br>
	<input type="text" name="alamat" id="alamat" placeholder="masukan alamat kamu.."><br>
	<label for="kode_pos">Kode pos</label><br>
	<input type="text" name="kode_pos" id="kode_pos" placeholder="masukan kode pos kamu.."><br>

	<input type="submit" value="simpan"/>
	<input type="reset" value="Reset" onclick="return confirm('hapus data yang diinput?')">


</form>
</body>
</html>