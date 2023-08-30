<?php 
include 'header.php';
include 'sidebar.php';

include '../classes/database.php';
$db=new database();
?>

<script>
        function showSuccessAlert() {
        alert("Data berhasil diedit!");
        window.location.href='tampil_mhs.php';
        }
    </script>

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

<h3>Edit data mahasiswa</h3>
<table class="table table-striped table-sm">
    <thead>
    <form action="proses_mhs.php?aksi=update" method="post">

    <?php
    foreach ($db->edit($_GET['npm']) as $d){

        ?>
    <table>

    <div class="form-group row">
    <label for="inputnpm" class="col-sm-1 col-form-label">NIM</label>
    <div class="col-sm-5">
    <input type="hidden" class="form-control"  name="id"  value="<?php echo $d['npm']?>">
    <input type="text" class="form-control"  name="npm" placeholder="Masukkan NIM" value="<?php echo $d['npm']?>">
    </div>
</div>
<div class="form-group row">
    <label for="inputnama" class="col-sm-1 col-form-label">Nama</label>
    <div class="col-sm-5">
    <input type="text" class="form-control"  name="nama" placeholder="Masukkan Nama" value="<?php echo $d['nama']?>">
    </div>
</div>
<div class="form-group row">
    <label for="inputalamat" class="col-sm-1 col-form-label">Alamat</label>
    <div class="col-sm-5">
    <textarea type="text" class="form-control"  cols="30" rows="5" name="alamat" placeholder="Masukkan Alamat"><?php echo $d['alamat']?></textarea>
    </div>
</div>
<br>
<div class="form-group row">
    <div class="col-sm-5">
    <input type="submit" value="Simpan" class="btn btn-success" onclick="showSuccessAlert()">
</div>
</div>
</form>


    </table>
    <?php } ?>

</form>