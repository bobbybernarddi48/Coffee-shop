<?php
$dataFile = 'data/checkout.json';

// Kalau file belum ada, buat folder & file kosong
if (!file_exists('data')) {
    mkdir('data', 0777, true);
}

if (!file_exists($dataFile)) {
    file_put_contents($dataFile, json_encode([]));
}

// Ambil isi file
$data = json_decode(file_get_contents($dataFile), true);

// Kalau kosong, jadikan array kosong biar tidak error
if (!$data) {
    $data = [];
}

$totalPendapatan = 0;
$totalItem = 0;

foreach ($data as $pesanan) {
    $subtotal = $pesanan['harga'] * $pesanan['qty'];
    $totalPendapatan += $subtotal;
    $totalItem += $pesanan['qty'];
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penjualan</title>
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>📊 Laporan Penjualan</h2>
        <p>Total Kopi Terjual: <b><?= $totalItem ?></b> cup</p>
        <p>Total Pendapatan: <b>Rp <?= number_format($totalPendapatan,0,',','.') ?></b></p>
        <a href="index.php">⬅ Kembali ke Toko</a>
    </div>
</body>
</html>
