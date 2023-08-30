<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobsheet3</title>
</head>
    <?php
#memanggil class database
include 'header.php';
include 'sidebar.php';
include '../classes/database.php';
#instansiasi database
$db = new database();
?>

<body>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Mahasiswa</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
        </button>
        </div>
    </div>
    
<br>
<a href="input_mhs.php" class="btn btn-primary">Tambah Data Mahasiswa</a>
<br>
<br>
<div class="table-responsive">
<table class="table table-bordered">
<thead class="table-dark">
<tr>
    <th>No</th>
    <th>Nim</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Opsi</th>
</tr>
</thead>
</div>
<?php
$no=1;
foreach ($db->tampil_mahasiswa() as $x){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['npm'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td>
            <a href="edit_mhs.php?npm=<?php echo $x['npm']; ?>&aksi=edit" class="btn btn-warning">Edit</a>
            <a href="proses_mhs.php?npm=<?php echo $x['npm']; ?>&aksi=hapus" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data?')">Hapus</a>
        </td>
    </tr>
    <?php
}
?>
</table>


</body>
</html>