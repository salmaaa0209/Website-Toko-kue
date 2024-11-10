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
     <h1>Berhasil menyimpan kedalam keranjang belanja</h1>
     <a href="index.php">Kembali belanja</a>
    </section> 
  </div>
   
</body>
</html>
