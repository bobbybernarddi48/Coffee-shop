<?php
$kopi=json_decode(file_get_contents("data/kopi.json"),true);
foreach($kopi as $k) if($k['id']==$_GET['id']) $e=$k;
?>
<form action="update.php" method="post" class="container mt-4">
<input type="hidden" name="id" value="<?= $e['id'] ?>">
<input name="nama" value="<?= $e['nama'] ?>" class="form-control mb-2">
<input name="harga" value="<?= $e['harga'] ?>" class="form-control mb-2">
<textarea name="deskripsi" class="form-control mb-2"><?= $e['deskripsi'] ?></textarea>
<input name="gambar" value="<?= $e['gambar'] ?>" class="form-control mb-2">
<button class="btn btn-primary">Update</button>
</form>
