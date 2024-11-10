<?php 
include "config.php";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM tb_keranjang WHERE id=$id";
	$query = mysqli_query($conn,$sql);
	if ($query) {
		header("Location: keranjang.php");
	}
	else{
		echo "gagal";
	}
}


?>