<?php 
include '../classes/database2.php';
$db=new database();

$aksi= $_GET['aksi'];
if($aksi=="tambah"){
    $db->tambah_mhs($_POST['nidn'],$_POST['nama_dsn'],$_POST['prodi_dsn']);
    header("location:tampil_dsn.php");
}else if($aksi=="update"){
    $db->update($_POST["nidn"],$_POST["nama_dsn"],$_POST["prodi_dsn"]);
    header("location:tampil_dsn.php");
}else if($aksi=='hapus'){
    $db->hapus($_GET["nidn"]);
    header("location:tampil_dsn.php");
}