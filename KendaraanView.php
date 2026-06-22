<!DOCTYPE html>
<html>
<head>
    <title>Data Kendaraan</title>
</head>
<body>

<h2>Data Kendaraan</h2>

<?php foreach ($data as $k) : ?>
    <p>
        Merek: <?= $k->getMerek(); ?> <br>
        Jumlah Roda: <?= $k->getJumlahRoda(); ?> <br>
        Harga: Rp <?= number_format($k->getHarga(), 0, ',', '.'); ?> <br>
        Warna: <?= $k->getWarna(); ?> <br>
        Bahan Bakar: <?= $k->getBhnBakar(); ?>
    </p>
    <hr>
<?php endforeach; ?>

</body>
</html>