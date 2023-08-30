<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel</title>
</head>
<body>
    <?php
    $integer=25;
    $string="Praktikum Web II";
    $boolean=true;

    echo "ini contoh integer = $integer <br>";
    echo "ini contoh string  =$string <br>";
    echo "ini contoh boolean =$boolean <br>";

    echo "<br>Tipe data Integer<br>";
    #inisiasi dan inisialisasi variabel
    $a = 10;
    $b = 3;
    $c = $a+5;
    $d = $b+20;
    $e = $d-$c;

    #Tampilkan data dengan perintah echo
    echo "variabel a: {$a} <br>";
    echo "variabel b: {$b} <br>";
    echo "variabel c: {$c} <br>";
    echo "variabel d: {$d} <br>";
    echo "variabel e: {$e} <br>";

    #mengetahui tipe data dari variabel
    var_dump($e);
    
    echo "<br> <br> Tipe data float <br>";
    #inisiasi dan inisialisasi variabel
    $nilaiPweb = 7.9;
    $nilairpl = 7.5;
    $nilaijarkom = 7.7;

    #hitung nilai rata-rata
    $rata2 = ($nilaiPweb+$nilairpl+$nilaijarkom)/3;

    #tampilkan data
    echo "Pemrograman Web: {$nilaiPweb}<br>";
    echo "Rekayasa Perangkat Lunak: {$nilairpl}<br>";
    echo "Jaringan Komputer: {$nilaijarkom}<br>";
    echo "Rata-rata: {$rata2}<br>";

    #lihat tipe data dari variabel $rata2
    var_dump($rata2);

    echo "<br> <br> Tipe data boolean <br>";
    $lulus=true;
    $gagal=false;

    var_dump($lulus);
    echo "<br>";
    var_dump($gagal);

    echo "<br> <br> Tipe data string <br>";
    $namadepan= "Tegar";#pakai tanda petik dua
    $namabelakang= 'Panggalih';#pakai tanda petik 1

    #menggabungkan dua variabel dengan tanda
    #petik dua
    $namalengkap="{$namadepan} {$namabelakang}";

    #menggabungkan dgn tanda titik(.)
    $namalengkap2=$namadepan.''.$namabelakang;
    #tampilkan data
    #bisa memasukkan variabel lain jika menggunakan petik dua
    echo "Nama Depan    : {$namadepan} <br>";
    #adapun menggunakan tanda petik satu,kita tidak bisa memasukkan variabel di dalam string tapi gabungnya dgn operator (.)
    echo 'Nama Belakang : ' .$namabelakang. '<br>';
    echo $namalengkap;

    ?>
</body>
</html>