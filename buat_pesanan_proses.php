<?php 

$produk_id = $_POST['produk_id'];
$total_harga_value = $_POST['total_harga_value'];
$jumlah = $_POST['jumlah'];  


//simpan kedalam keranjang (tb_keranjang)
include "config.php";
$simpan_keranjang = mysqli_query($conn,"INSERT INTO tb_keranjang VALUES(NULL,'$produk_id','$jumlah','$total_harga_value','keranjang') ") or die(mysqli_error());

//cek proses simpan dalam keranjang
if ($simpan_keranjang == TRUE){
    header('location: berhasil.php');
}else{
    echo "Gagal menyimpan dalam kerangjang";
}

?>