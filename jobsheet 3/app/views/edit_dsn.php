<?php 
include 'header.php';
include 'sidebar.php';

include '../classes/database2.php';
$db=new database();
?>

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

<h3>Edit Data Dosen</h3>
<table class="table table-striped table-sm">
    <thead>
<form action="proses_dsn.php?aksi=update" method="post">
    <?php
    foreach ($db->edit($_GET['nidn']) as $d){

        ?>
    <table>
    
    <div class="form-group row">
    <label for="inputnpm" class="col-sm-1 col-form-label">NIDN</label>
    <div class="col-sm-5">
    <input type="hidden" class="form-control"  name="id"  value="<?php echo $d['nidn']?>">
    <input type="text" class="form-control"  name="nidn" placeholder="Masukkan NIDN" value="<?php echo $d['nidn']?>">
    </div>
</div>
<div class="form-group row">
    <label for="inputnama" class="col-sm-1 col-form-label">Nama</label>
    <div class="col-sm-5">
    <input type="text" class="form-control"  name="nama_dsn" placeholder="Masukkan Nama" value="<?php echo $d['nama_dsn']?>">
    </div>
</div>
<div class="form-group row">
    <label for="inputalamat" class="col-sm-1 col-form-label">Prodi</label>
    <div class="col-sm-5">
    <input type="text" class="form-control"  name="prodi_dsn" placeholder="Masukkan Prodi" value="<?php echo $d['prodi_dsn']?>"></input>
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