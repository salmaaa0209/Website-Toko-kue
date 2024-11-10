<?php 
include "config.php";
$sql2 = "SELECT kategori FROM tb_produk";
$query2 = mysqli_query($conn,$sql2);

$kategori = mysqli_fetch_assoc($query2);
var_dump($kategori);
 ?>