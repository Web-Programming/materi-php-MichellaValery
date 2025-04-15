<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<h1>welcome to my First webssite wwith PHP</h1>"; ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit maiores quo asperiores illum, corporis temporibus nobis quod animi voluptates iure libero itaque tempore, dolor, laboriosam voluptatem delectus dicta consequatur sunt!
    <p>My Name is <?php echo "<b>Michella Valery</b>";?></p>
    <hr/>
    <h4>Menulis Variabel di PHP</h4>
    <?php
        $nama = "Michella Valery"; //string
        $umur = 19; //number
        $perempuan = true; //boolean
        $saldo = null; //null
        $hobby = ["Membaca", "Belajar", "Menonton"]; //array
        $makanan_fav = array("Kwetiaw","Mie Pangsit","Sushi"); //array
        #ini jg komentar

        //Variabel statis
        const PI = 3.14;
        echo "Nilai PI =", PI;
        echo "<br/>";
        echo "Umur = $umur";
        echo "<br/>";
        //echo "Hobbi 1. $hobby[0]";

        //menampilkan nilai array
        foreach ($hobby as $key => $value) {
            echo "Hobi ".($key+1)." = $value <br/>";
        }

        $saldo = 1000; //dollar
        //tampilkan symbol dolar ($) menggunkan echo
        echo "Saldo = \"\$$saldo USD\"";
    ?>
</body>
</html>

