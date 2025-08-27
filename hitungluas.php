<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Luas Segitiga</h1>
    <?php
    define("st", 1 / 2);
    define("tt", 8);
    define("ls1", 12);
    define("ls2", 6);
    $l1 = st * ls1 * tt;
    echo "Luas Segitiga 1 : $l1<br>";
    $l2 = st * ls2 * tt;
    echo "Luas Segitiga 2 : $l2"
    ?>
</body>
</html>