<?php
class manusia{
    public $nama_saya;

    function panggil_nama($saya){
        $this->nama_saya= $saya;
    }
    private function panggil_nim($saya){
        $this->nim_saya= $saya;
    }
    protected function panggil_prodi($saya){
        $this->prodi_saya= $saya;
    }

}

#class turunan atau sub kelas dari manusia
class mahasiswa extends manusia{
    public $nama_mahasiswa;
    

    function panggil_mahasiswa($mahasiswa){
        $this->nama_mahasiswa = $mahasiswa;
    }

    #private method
    function panggil_nim($nim){
        $this->nim_mahasiswa = $nim;
    }

    #protected method
    function panggil_prodi($prodi){
        $this->prodi_mahasiswa= $prodi;
    }
}

#instansiasi class mahasiswa
$informatika=new mahasiswa();

$informatika->panggil_nama("Tegar");
$informatika->panggil_mahasiswa("Panggalih");
$nim = "220302071";
$prodi = "Teknik Informatika";
$informatika->panggil_nim($nim);
$informatika->panggil_prodi($prodi);

#tampillkan isi dari properti
echo "Nama Depan Saya : " . $informatika->nama_saya ."<br>";
echo "Nama Belakang : " . $informatika->nama_mahasiswa ."<br>" ;
echo "NIM saya : " . $nim . "<br>";
echo "Prodi saya : " .$prodi ;