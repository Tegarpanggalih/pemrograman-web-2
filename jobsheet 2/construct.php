<?php
class dosen{
    var $nidn;
    var $nama;
    var $prodi;

    #construct untuk memanggil paling awal
    function __construct(){
        echo "saya mahasiswa teknik informatika";
        echo "<br>";
    }

    #construct untuk memanggil paling akhir
    function __destruct(){
        echo "Politeknik Negeri Cilacap";
    }

    function tampil_nidn(){
        return"220302071<br>";
    }
    function tampil_nama(){
        return"Nama saya adalah Tegar Panggalih<br>";
    }
    function tampil_prodi(){
        return"Teknik Informatika<br>";
    }

    function tampil_mahasiswa(){
        return"Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah<br>";
    }
}
    $nama_dosen = new dosen();

    echo $nama_dosen->tampil_nama();
    echo $nama_dosen->tampil_mahasiswa();
    