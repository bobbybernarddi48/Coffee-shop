<?php
$data = json_decode(file_get_contents("data/kopi.json"), true);
$data[] = ["id"=>time(),"nama"=>$_POST['nama'],"harga"=>$_POST['harga'],"deskripsi"=>$_POST['deskripsi'],"gambar"=>$_POST['gambar']];
file_put_contents("data/kopi.json", json_encode($data, JSON_PRETTY_PRINT));
header("Location:index.php");
