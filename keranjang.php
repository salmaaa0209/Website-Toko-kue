<?php 
include "config.php";

// Ambil data produk berdasarkan ID (misalnya dari URL)
$id_produk = $_GET['id'] ?? null;

$sql = "SELECT * FROM tb_produk WHERE id_produk = '$id_produk'";
$query = mysqli_query($conn, $sql);
$produk = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CAFE SWEET MEMORIES</title>
  
  <!-- Link Favicon -->
  <link rel="shortcut icon" href="favicon/favicon web.png" type="image/x-icon" />

  <!-- Link CSS Styling -->
  <link rel="stylesheet" href="style.css" />

  <!-- Link Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;900&family=Quicksand:wght@300;700&display=swap" rel="stylesheet" />

  <!-- Link Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
</head>
<body>
  <nav>
    <div class="logo">
      <h4>Café Sweet Memories</h4>
    </div>
    <ul> 
      <?php include 'menu.php'; ?>
    </ul>
    <div class="icons"> 
      <?php include 'keranjang-icon.php'; ?>
    </div>
    <div class="menu-toggle">
      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>

  <!-- Content -->
  <div class="container">
    <!-- Home -->
    <section class="home" id="home">
     <h1>Keranjang belanja anda : </h1> 
     <table border="1" cellpadding="5" width="50%">
        <tr>
            <td><b>Nama Produk</b></td>
            <td><b>Harga Satuan</b></td>
            <td><b>Jumlah Beli</b></td>
            <td><b>Total</b></td>
            <td><b></b></td>
        </tr>
     <?php 

        $data_keranjang = mysqli_query($conn,"SELECT * FROM tb_keranjang as k LEFT JOIN tb_produk as p ON k.produk_id=p.id_produk WHERE k.status='keranjang' ");
        $total_harga = 0;
        while ($dataList = mysqli_fetch_assoc($data_keranjang)){
            $total_harga = $total_harga + $dataList['total'];
            ?>
            <tr> 
                <td><?php echo $dataList['nama_produk'] ?></td>
                <td><?php echo $dataList['harga_produk'] ?></td>
                <td><?php echo $dataList['jumlah'] ?></td>
                <td><?php echo $dataList['total'] ?></td> 
                <td><a href="kerangjang-hapus.php?id=<?php echo $dataList['id'] ?>">'Hapus<a></td> 
            </tr>
            
            <?php
        }
        ?>
        <tr>
            <td colspan="3"><b>Total Harga</b></td> 
            <td><b><?php echo $total_harga ?></b></td>
            <td></td>
        </tr>

    
    </table>
    
    <a href="pembayaran.php?total=<?php echo $total_harga ?>" style="text-decoration:none;">
    <button style="padding:5px;width='50%">Bayar Sekarang</button>
    </a>

    </section> 
  </div>
   
</body>
</html>
