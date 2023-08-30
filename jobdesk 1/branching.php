<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <?php
    echo "contoh dalam statis <br>";
    $x = 1;
    echo "Nilai x = $x adalah ";
    if($x > 0){
        echo "bilangan positif";
    }elseif($x < 0){
        echo "bilangan negatif";
    }else {
        echo"bilangan nol";
    }
    ?>
    <p>contoh dalam dinamis</p>
    <form method="post" action="">
    masukkan nilai x: <input type="number" name="x">
    <input type="submit" value="cek">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $x=$_POST["x"];
        echo "Nilai x = $x adalah ";
        if ($x>0){
            echo "bilangan positif";
        }elseif ($x<0){
            echo "bilangan negatif";
        }else{
            echo "bilangan nol";
        }
    }
    ?>

</body>
</html>