<?php
class manusia{
    public $nama_saya;
    private $nim="220302071";

    function panggil_nama($saya){
        $this->nama_saya= $saya;
    }

    #private method
    function panggil_nim($nim){
        return "NIM saya " . $nim;
    }

    #protected method
    function panggil_prodi($prodi){
        return "Program studi saya " .$prodi;
    }
}

#class turunan atau sub kelas dari manusia
class mahasiswa extends manusia{
    public $nama_mahasiswa;
    private $nim="220302071";

    function panggil_mahasiswa($mahasiswa){
        $this->nama_mahasiswa = $mahasiswa;
    }

    #private method
    function panggil_nim($nim){
        return "NIM saya " .$nim;
    }

    #protected method
    function panggil_prodi($prodi){
        return "Program studi saya " .$prodi;
    }
}

#instansiasi class mahasiswa
$informatika=new mahasiswa();

$informatika->panggil_nama("Tegar");
$informatika->panggil_mahasiswa("Panggalih");
$nim = "220302071";
$nim_result = $informatika->panggil_nim($nim);
$prodi = "Teknik Informatika";
$prodi_result = $informatika->panggil_prodi($prodi);

#tampillkan isi dari properti
echo "Nama Depan Saya : " . $informatika->nama_saya ."<br>";
echo "Nama Belakang : " . $informatika->nama_mahasiswa ."<br>" ;
echo $nim_result . "<br>";
echo $prodi_result;