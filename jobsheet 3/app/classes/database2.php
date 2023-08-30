<?php

class database{
    var $host="localhost";
    var $username="root";
    var $password="";
    var $db="akademik";
    var $koneksi;

    function __construct(){
        $this->koneksi = mysqli_connect($this->host,$this->username,$this->password,$this->db);
    }

    function tampil_dosen(){
        $data = mysqli_query($this->koneksi,"select * from dosen");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function tambah_mhs($nidn,$nama,$prodi){
        mysqli_query($this->koneksi,"insert into dosen (nidn,nama_dsn,prodi_dsn) values('$nidn','$nama','$prodi')");
    }

    function edit($nidn){
        $data = mysqli_query($this->koneksi,"select * from dosen where nidn='$nidn'");
        while ($d= mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function update($nidn ,$nama ,$prodi){
        mysqli_query($this->koneksi,"update dosen set nidn='$nidn', nama_dsn='$nama', prodi_dsn='$prodi' where nidn='$nidn'");
    }

    function hapus($nidn){
        mysqli_query($this->koneksi,"delete from dosen where nidn='$nidn'");
    }
}
