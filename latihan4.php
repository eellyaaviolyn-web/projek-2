<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menghitung luas Lingkaran</title>
</head>
<body>
    <h1>Luas Lingkaran</h1>
    <?php
    //konstanta untuk nilai nilai judul
    define("judul","Hitung Luas Lingkaran");

    //konstanta untuk nilai nilai phi 
    define("PHI", 3.14);
    $r =10;
    echo"<br> jari jari : $r <br>";
    $luas = PHI * $r * $r;
    echo"Luas Lingkaran = $luas";
    ?>
</body>
</html>