<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $NamaBarang="laptop";
        $jumlah = 5;
        $harga = 20000000000;
        $diskon = 4000000;
        $hargaAkhir = $harga - $diskon;
        $total =$harga*$jumlah;
    echo"Nama Barang : $NamaBarang<br>";
    echo"jumlah Beli : $jumlah<br>";
    echo"Harga Barang : $harga<br>";
    echo"Harga Awal : Rp " . number_format($harga, 0, ',',',') ."<br>";
    echo"potongan : Rp " . number_format($diskon, 0, ',',',') ."<br>";
    echo"Harga setelah diskon : Rp " . number_format($hargaAkhir, 0, ',',',') ."<br>";
    echo"Total Bayar : $total<br>";
    ?>
</body>
</html>