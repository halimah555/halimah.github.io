
<?php
include 'koneksi.php';

if (isset($_POST)) {
    $sql = "INSERT INTO tb_mahasiswa VALUES ('', '$_POST[npm]',
    											 '$_POST[nama]', 
    											 '$_POST[tempat_lahir]',
    											 '$_POST[tanggal_lahir]',
    											 '$_POST[jenis_kelamin]',
    											 '$_POST[alamat]', 
    											 '$_POST[kode_pos]')";
    $dbh->exec($sql);
}

header("location:index.php");
?>
