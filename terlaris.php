<?php
$data = json_decode(file_get_contents('checkout.json'), true);
$terlaris = [];

// Hitung total terjual per kopi
foreach ($data as $item) {
    $nama = $item['nama'];
    $qty = $item['qty'];

    if (!isset($terlaris[$nama])) {
        $terlaris[$nama] = 0;
    }
    $terlaris[$nama] += $qty;
}

// Urutkan dari terbesar
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
