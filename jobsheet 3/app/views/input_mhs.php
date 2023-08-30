<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php 
    include 'header.php';
    include 'sidebar.php';
?>

    <script>
        function showSuccessAlert() {
        alert("Mahasiswa berhasil ditambahkan!");
        window.location.href='tampil_mhs.php';
        }
    </script>

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

<h3>Tambah Data Mahasiswa</h3>

    <table class="table table-striped table-sm">
    <thead>
    <form action="proses_mhs.php?aksi=tambah" method="post">

<div class="form-group row">
    <label for="inputnpm" class="col-sm-1 col-form-label">NIM</label>
    <div class="col-sm-5">
    <input type="text" class="form-control" id="inputnpm" name="npm" placeholder="Masukkan NIM">
    </div>
</div>
<div class="form-group row">
    <label for="inputnama" class="col-sm-1 col-form-label">Nama</label>
    <div class="col-sm-5">
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
    </div>
</div>
<div class="form-group row">
    <label for="inputalamat" class="col-sm-1 col-form-label">Alamat</label>
    <div class="col-sm-5">
    <textarea type="text" class="form-control" id="alamat" cols="30" rows="5" name="alamat" placeholder="Masukkan Alamat"></textarea>
    </div>
</div>
<br>
<div class="form-group row">
    <div class="col-sm-5">
    <input type="submit" value="Tambahkan Data" class="btn btn-success" onclick="showSuccessAlert()">
</div>
</div>
</form>


</table>
</thead>

</body>
</html>