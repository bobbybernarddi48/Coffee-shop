<?php
$data=json_decode(file_get_contents("data/kopi.json"),true);
foreach($data as &$k){
 if($k['id']==$_POST['id']){
  $k['nama']=$_POST['nama'];
  $k['harga']=$_POST['harga'];
  $k['deskripsi']=$_POST['deskripsi'];
  $k['gambar']=$_POST['gambar'];
 }}
file_put_contents("data/kopi.json",json_encode($data,JSON_PRETTY_PRINT));
header("Location:index.php");
