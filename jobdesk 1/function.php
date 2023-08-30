<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php
    echo "Penggunaan function secara statis <br>";
    function persegi($sisi){
        return $sisi*$sisi;
    }
    function persegi_panjang($p,$l){
        return $p*$l;
    }
    function lingkaran($r){
        return 3.14*$r*$r;
    }
    echo "Luas Persegi = ". persegi(5) ."<br>";
    echo "Luas Persegi Panjang = ". persegi_panjang(5,2) ."<br>";
    echo "Luas Lingkaran = ". lingkaran(10) ."<br>";
    ?>

    <?php
    echo "<br> Penggunaan function secara dinamis";
    if(isset($_POST['hitung'])){
        $s=$_POST['sisi'];
        $p=$_POST['panjang'];
        $l=$_POST['lebar'];
        $r=$_POST['jari2'];
        $operasi=$_POST['operasi'];
        switch ($operasi){
            case 'persegi':
                $hasil=$s*$s;
                break;
            case 'persegi panjang':
                $hasil=$p*$l;
                break;
            case 'lingkaran':
                $hasil=3.14*$r*$r;
                break;
        }
    }
    ?>
    <div class="function"><br>
    <form class="brand" method="post" action="function.php">
        <input type="text" name="sisi" class="bil" autocomplete="off" placeholder="masukkan sisi"><br>
        <input type="text" name="panjang" class="bil" autocomplete="off" placeholder="masukkan panjang"><br>
        <input type="text" name="lebar" class="bil" autocomplete="off" placeholder="masukkan lebar"><br>
        <input type="text" name="jari2" class="bil" autocomplete="off" placeholder="masukkan jari-jari"><br>
        <select name="operasi" class="opt">
            <option value="persegi">persegi</option>
            <option value="persegi panjang">persegi panjang</option>
            <option value="lingkaran">lingkaran</option>
        </select>
        <input type="submit" name="hitung" value="Hitung" class="tombol">
    </form>
    <?php if(isset($_POST['hitung'])){ ?>
	<input type="text" value="<?php echo $hasil; ?>" class="bil">
    <?php }else{ ?>
	<input type="text" value="0" class="bil">
    <?php } ?>
    </div>
</body>
</html>