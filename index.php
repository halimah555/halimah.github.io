<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="style.css">
	<title>tabel mahasiswa</title>
</head>
  <form action="" method="post" class="form-inline">
            <button type="submit" class="btn btn-primary mb-2" name="submit"><i class="fas fa-search"></i></button>
            <div class="col-sm-11">
                <input type="text" name="cari" placeholder="pencarian" autocomplete="off" class="col-sm-2 col-form-label">
            </div>
        </form>
<?php
include 'koneksi.php';
?>
<style>
    tbody > tr:nth-chilp(2n+1) > td, tbody > tr:nth=chilp(2n+1) > th {

    }
    table {
        width: 80%;
        margin: auto;
        border-collapse: collapse;
        box-shadow: darkgrey;

    }
    thead tr {
        background-color: #36c2ff;
    }
</style>
<body>

<h1 align="center">BIODATA MAHASISWA</h1>

<table border="1" bgcolor="white">
    <thead>
        <tr>
            <th>No</th>
            <th>NPM</th>
            <th>NAMA</th>
            <th>TEMPAT LAHIR</th>
            <th>TANGGAL LAHIR</th>
            <th>JENIS KELAMIN</th>
            <th>ALAMAT</th>
            <th>KODE POS</th>
            <th>Pilihan</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT * FROM tb_mahasiswa ORDER BY id";
    $no  = 1;
   
    foreach ($dbh->query($sql) as $data) :
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['npm'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['tempat_lahir'] ?></td>
            <td><?php echo $data['tanggal_lahir'] ?></td>
            <td><?php echo $data['jenis_kelamin'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td><?php echo $data['kode_pos'] ?></td>
            <td align="center">
                <a href="edit.php?id=<?php echo $data['id'] ?>"><button type="edit" value="edit">Edit</button> </a>&nbsp;&nbsp;
                <a href="hapus.php?id=<?php echo $data['id'] ?>"><button type="delete" value="hapus">Hapus</button></a>
            </td>
        </tr>
        <?php
    endforeach;
        ?>

    </tbody>
</table><br><br>

    <center><a href="input.php"><button>Tambah</button></a></center>

</body>
