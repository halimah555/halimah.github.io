<?php
include 'koneksi.php';

if (isset($_POST)) {
    $sql = "UPDATE tb_mahasiswa SET npm = '$_POST[npm]',
                                    nama = '$_POST[nama]',
                                    tempat_lahir = '$_POST[tempat_lahir]',
                                    tanggal_lahir = '$_POST[tanggal_lahir]',
                                    jenis_kelamin  ='$_POST[jenis_kelamin]',
                                    alamat  ='$_POST[alamat]',
                                    kode_pos  ='$_POST[kode_pos]'
                                WHERE id = '$_POST[id]' ";
    $dbh->exec($sql);
}

header("location:index.php");
?>