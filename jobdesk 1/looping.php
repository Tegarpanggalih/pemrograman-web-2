<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo"perulangan FOR bilangan genap dari 1 hingga 10 <br>";
    for ($x =2;$x <= 10; $x  +=2)
    echo"$x <br>";

    echo"<br>perulangan While bilangan ganjil dari 1 hingga 10 <br>";
    $y=1;
    while ($y <= 10){
        echo "$y <br>";
        $y += 2;
    }

    echo"<br>perulangan Do-While bilangan prima kurang dari 20 <br>";
    $z=2;
    do{
        $div_count=0;
        for ($i=1;$i<=$z;$i++){
            if(($z%$i)==0){
                $div_count++;
            }
        }
        if($div_count<3){
            echo "$z <br>";
        }
        $z=$z+1;
    }while ($z<20);
    ?>
</body>
</html>