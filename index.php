<?php $kopi = json_decode(file_get_contents("data/kopi.json"), true); ?>
<!DOCTYPE html>
<html>
<head>
<title>Kopi Shop</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body class="container mt-4">

<h2>☕ Daftar Kopi</h2>
<a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Kopi</a>
<a href="pesanan.php" class="btn btn-dark mb-3">📦 Lihat Pesanan</a>
<a href="terlaris.php" class="btn btn-warning">🔥 Kopi Terlaris</a>
<a href="laporan.php" class="btn btn-success">📊 Laporan</a>



<div class="row">
<?php foreach ($kopi as $k): ?>
<div class="col-md-3">
  <div class="card mb-3 shadow-sm">
    <img src="assets/img/<?= $k['gambar'] ?>" class="card-img-top" height="160">
    <div class="card-body">
      <h5><?= $k['nama'] ?></h5>
      <p><?= $k['deskripsi'] ?></p>
      <p class="text-danger fw-bold">Rp <?= number_format($k['harga']) ?></p>
      <a href="edit.php?id=<?= $k['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
      <a href="hapus.php?id=<?= $k['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
      <a href="checkout.php?id=<?= $k['id'] ?>" class="btn btn-success btn-sm">Beli</a>
    </div>
  </div>
</div>
<?php endforeach; ?>
</div>

</body>
</html>
