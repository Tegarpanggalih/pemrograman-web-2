<?php
#membuat class mahasiswa
class mahasiswa{
    #property public
    #public bisa dipanggil diluar class sebaliknya (protected tidak bisa tapi bisa dipanggil di turunanya/warisannya)
    public $nama;
    private $nim="220302071";

    #public method
    function tampil_nama(){
        #nilai kembalian
        return "Nama saya Tegar <br>";
    }

    #private method
    function tampil_nim(){
        return"NIM saya " . $this->nim;
    }
}
#instansiasi objek mahasiswa kedalam variabel mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();

#memanggil method tampilkan nama
echo $mahasiswa->tampil_nama();
echo $nim->tampil_nim();
