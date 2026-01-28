<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Kopi</title>
        <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css rel="style">
        <link rel="stylesheet" href="style.css>
    </head>
    <body class="container mt-4>
    <h3>Tambah Kopi</h3>
<form action="simpan.php" method="post">
<input name="nama" class="form-control mb-2" placeholder="Nama Kopi" required>
<input name="harga" type="number" class="form-control mb-2" placeholder="Harga" required>
<textarea name="deskripsi" class="form-control mb-2" placeholder="Deskripsi"></textarea>
<input name="gambar" class="form-control mb-2" placeholder="Nama file gambar">
<button class="btn btn-success">Simpan</button>
</form>
</body>
</html>