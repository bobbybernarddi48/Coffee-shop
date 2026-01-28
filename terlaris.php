<?php
$dataFile = 'data/checkout.json';

// Kalau file belum ada, buat file kosong
if (!file_exists($dataFile)) {
    file_put_contents($dataFile, json_encode([]));
}

// Ambil data pesanan
$data = json_decode(file_get_contents($dataFile), true);

// Kalau kosong, jadikan array kosong
if (!$data) {
    $data = [];
}

$terlaris = [];

// Hitung total terjual tiap kopi
foreach ($data as $item) {
    $nama = isset($item['kopi']) ? $item['kopi'] : 'Tidak diketahui';
    $qty  = isset($item['qty']) ? $item['qty'] : 1; // default 1 kalau tidak ada

    if (!isset($terlaris[$nama])) {
        $terlaris[$nama] = 0;
    }
    $terlaris[$nama] += $qty;
}



// Urutkan dari yang paling laku
arsort($terlaris);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Kopi Terlaris</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <h2>🔥 Kopi Terlaris</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Ranking</th>
            <th>Nama Kopi</th>
            <th>Total Terjual</th>
        </tr>

        <?php $rank = 1; foreach ($terlaris as $nama => $total): ?>
        <tr>
            <td><?= $rank++ ?></td>
            <td><?= $nama ?></td>
            <td><?= $total ?> cup</td>
        </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <a href="index.php">⬅ Kembali ke Toko</a>
</div>
</body>
</html>
