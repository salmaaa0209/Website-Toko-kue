<?php 
include "config.php";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM tb_produk WHERE id_produk=$id";
	$query = mysqli_query($conn,$sql);
	if ($query) {
		header("Location: index.php");
	}
	else{
		echo "gagal";
	}
}


?>