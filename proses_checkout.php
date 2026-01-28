<?php
$data=json_decode(file_get_contents("data/checkout.json"),true);
$data[]=$_POST;
file_put_contents("data/checkout.json",json_encode($data,JSON_PRETTY_PRINT));
echo "<h3>Pesanan berhasil!</h3><a href='index.php'>Kembali</a>";
