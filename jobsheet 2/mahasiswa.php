<?php

#membuat class
class mahasiswa{
#menuliskan property
var $nim;
var $nama;
var $alamat;


#method menampilkan nama
function tampil_nama(){
return "Nama saya adalah Tegar<br>"; 
}
#method menampilkan alamat
function tampil_alamat(){
// isi
}
}

#membuat objek nama_mahasiswa
$nama_mahasiswa = new mahasiswa();

#menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();

class dosen{
    var $nidn;
    var $nama;
    var $prodi;

    function tampil_nidn(){
        return"220302071<br>";
    }
    function tampil_nama(){
        return"Nama saya adalah Tegar Panggalih<br>";
    }
    function tampil_prodi(){
        return"Teknik Informatika<br>";
    }
}
    $nama_dosen = new dosen();

    echo $nama_dosen->tampil_nidn();
    echo $nama_dosen->tampil_nama();
    echo $nama_dosen->tampil_prodi();

