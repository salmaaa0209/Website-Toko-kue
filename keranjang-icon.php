<?php 
//Pengecekan data yang ada dikeranjang
$data = mysqli_query($conn,"SELECT * FROM tb_keranjang WHERE status='keranjang' ");
?>

<a href="keranjang.php"><i class="fas fa-shopping-cart"></i> <?= mysqli_num_rows($data) ?? 0; ?></a>