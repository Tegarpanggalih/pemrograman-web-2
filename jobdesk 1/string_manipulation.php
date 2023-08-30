<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String manipulation</title>
</head>
<body>
    <?php
    echo "contoh penggunaan fungsi php huruf kapital <br>";
    $x="Selamat belajar PHP!";
    // echo $x;
    echo strtoupper ("$x<br>");
    echo "<br>contoh penggunaan fungsi php huruf kecil <br>";
    echo strtolower ("$x<br>");
    echo "<br>contoh penggunaan fungsi php memotong string <br>";
    echo substr($x,0,7)
    ?>
</body>
</html>