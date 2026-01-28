<?php
$kopi=json_decode(file_get_contents("data/kopi.json"),true);
foreach($kopi as $k) if($k['id']==$_GET['id']) $item=$k;
?>
<form action="proses_checkout.php" method="post" class="container mt-4">
<h3>Checkout <?= $item['nama'] ?></h3>
<input type="hidden" name="kopi" value="<?= $item['nama'] ?>">
<input type="hidden" name="harga" value="<?= $item['harga'] ?>">
<input name="nama" class="form-control mb-2" placeholder="Nama Pembeli" required>
<textarea name="alamat" class="form-control mb-2" placeholder="Alamat" required></textarea>
<label class="form-label">Pilihan Penyajian</label>
<select name="tipe" class="form-control mb-2" required>
    <option value="Dine In">Dine In (Minum di tempat)</option>
    <option value="Take Away">Take Away (Bungkus)</option>
</select>

<button class="btn btn-success">Pesan</button>
</form>
