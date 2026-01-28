<?php $pesanan=json_decode(file_get_contents("data/checkout.json"),true); ?>
<!DOCTYPE html>
<html>
<head>
<title>Daftar Pesanan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body class="container mt-4">

<h2>📦 Daftar Pesanan</h2>
<a href="index.php" class="btn btn-secondary mb-3">← Kembali</a>

<table class="table table-bordered">
<thead class="table-dark">
<tr><th>No</th><th>Nama</th><th>Alamat</th><th>Kopi</th><th>Harga</th></tr>
</thead>
<tbody>
<?php $no=1; foreach($pesanan as $p): ?>
<tr>
<td><?= $no++ ?></td>
<td><?= $p['nama'] ?></td>
<td><?= $p['alamat'] ?></td>
<td><?= $p['kopi'] ?></td>
<td>Rp <?= number_format($p['harga']) ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

</body>
</html>
