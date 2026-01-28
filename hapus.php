<?php
$data=json_decode(file_get_contents("data/kopi.json"),true);
$data=array_filter($data,fn($k)=>$k['id']!=$_GET['id']);
file_put_contents("data/kopi.json",json_encode(array_values($data),JSON_PRETTY_PRINT));
header("Location:index.php");
