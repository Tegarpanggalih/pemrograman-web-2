<?php 
    include 'header.php';
    include 'sidebar.php';
?>

<script>
        function showSuccessAlert() {
        alert("Dosen berhasil ditambahkan!");
        window.location.href='tampil_dsn.php';
        }
    </script>

<body>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Dosen</h1>
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

<h3>Tambah Data Dosen</h3>



<table class="table table-striped table-sm">
    <thead>
<form action="proses_dsn.php?aksi=tambah" method="post">

<div class="form-group row">
    <label for="inputnidn" class="col-sm-1 col-form-label">NIDN</label>
    <div class="col-sm-5">
    <input type="text" class="form-control" id="inputnidn" name="nidn" placeholder="Masukkan NIDN">
    </div>
</div>
<div class="form-group row">
    <label for="inputnama" class="col-sm-1 col-form-label">Nama</label>
    <div class="col-sm-5">
    <input type="text" class="form-control" id="nama" name="nama_dsn" placeholder="Masukkan Nama">
    </div>
</div>
<div class="form-group row">
    <label for="inputprodi" class="col-sm-1 col-form-label">Prodi</label>
    <div class="col-sm-5">
    <input type="text" class="form-control" id="prodi"  name="prodi_dsn" placeholder="Masukkan Prodi"></input>
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