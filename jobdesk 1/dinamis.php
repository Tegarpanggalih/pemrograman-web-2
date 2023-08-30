<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function persegi($sisi){
    return $sisi * $sisi;
    }

    function persegi_panjang($panjang, $lebar){
    return $panjang * $lebar;
    }

    function lingkaran($jari2){
    return 3.14 * $jari2 * $jari2;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sisi = $_POST["sisi"];
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $jari2 = $_POST["jari2"];

    echo "Penggunaan function secara dinamis <br>";
    echo "Luas Persegi = " . persegi($sisi) . "<br>";
    echo "Luas Persegi Panjang = " . persegi_panjang($panjang, $lebar) . "<br>";
    echo "Luas Lingkaran = " . lingkaran($jari2) . "<br>";
}
?>


    <form method="post" action="">
        Masukkan nilai sisi persegi: <input type="number" name="sisi"><br>
        Masukkan nilai panjang persegi panjang: <input type="number" name="panjang"><br>
        Masukkan nilai lebar persegi panjang: <input type="number" name="lebar"><br>
        Masukkan nilai jari-jari lingkaran: <input type="number" name="jari2"><br>
        <input type="submit" value="Hitung">
    </form>

</body>
</html>