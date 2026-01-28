
<?php
$kopi = json_decode(file_get_contents("data/kopi.json"), true);
$pesanan = json_decode(file_get_contents("data/checkout.json"), true);

$terlaris = [];
foreach ($pesanan as $p) {
    $nama = $p['kopi'];
    if (!isset($terlaris[$nama])) $terlaris[$nama] = 0;
    $terlaris[$nama]++;
}
arsort($terlaris);
$bestSeller = key($terlaris); // kopi paling laku
?>
<?php $kopi = json_decode(file_get_contents("data/kopi.json"), true); ?>
<!DOCTYPE html>
<html>
<head>
    <div class="banner">
    <img src="assets/img/banner.jpg" alt="Coffee Banner">
    </div>
</div>

<title>Kopi Shop</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<div class="container">

    <!-- Tombol Menu -->
    <div class="d-flex gap-2 mb-3 flex-wrap">
        <a href="tambah.php" class="btn btn-dark">+ Tambah Kopi</a>
        <a href="pesanan.php" class="btn btn-dark">📦 Lihat Pesanan</a>
        <a href="terlaris.php" class="btn btn-warning">🔥 Kopi Terlaris</a>
        <a href="laporan.php" class="btn btn-success">📊 Laporan</a>
    </div>

    <!-- ✅ JUDUL HARUS DI DALAM CONTAINER -->
    <h2 class="section-title text-center">Menu Kopi Favorit ☕</h2>

    <div class="row">
        <!-- card produk -->
    </div>

</div>



<div class="row">
<?php foreach ($kopi as $k): ?>
<div class="col-md-3 mb-4">
  <div class="card h-100 shadow-sm product-card position-relative">
    
    <?php if(isset($bestSeller) && $k['nama']==$bestSeller): ?>
      <span class="badge bg-danger position-absolute top-0 start-0 m-2">🔥 Best Seller</span>
    <?php endif; ?>

    <img src="<?= $k['gambar'] ?>" class="card-img-top product-img">

    <div class="card-body d-flex flex-column text-center">
      <h5 class="fw-bold"><?= $k['nama'] ?></h5>
      <p class="text-muted mb-4">Rp <?= number_format($k['harga']) ?></p>

      <!-- tombol selalu di bawah -->
      <a href="checkout.php?kopi=<?= $k['nama'] ?>&harga=<?= $k['harga'] ?>" 
         class="btn btn-dark mt-auto w-100">
         Pesan Sekarang
      </a>
    </div>

  </div>
</div>


$terlaris = [];
foreach ($pesanan as $p) {
    $nama = $p['kopi'];
    if (!isset($terlaris[$nama])) $terlaris[$nama] = 0;
    $terlaris[$nama]++;
}
arsort($terlaris);
$bestSeller = key($terlaris); // kopi paling laku
?>

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
