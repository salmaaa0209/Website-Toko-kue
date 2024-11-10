<?php 
include "config.php";

// Ambil data produk berdasarkan ID (misalnya dari URL)
$id_produk = $_GET['id'] ?? null;

$sql = "SELECT * FROM tb_produk WHERE id_produk = '$id_produk'";
$query = mysqli_query($conn, $sql);
$produk = mysqli_fetch_assoc($query);


//rubah status yang ada dikeranjang dengan status sudah dibayar
$update_status = mysqli_query($conn,"UPDATE tb_keranjang SET status='dibayar' WHERE status='keranjang' ");
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
     <h1>Silahkan Pilih metode pembayaran</h1>
     <h2>Rp <?php echo number_format($_GET['total']) ?></h2>
     <form>
            <div class="flex items-center mb-4">
                <input type="radio" id="dana" name="payment" class="form-radio text-pink-600 h-5 w-5" onclick="redirectTo('pembayaran_dana.php?total=<?php echo number_format($_GET['total']) ?>')">
                <label for="dana" class="ml-3">DANA</label>
            </div>
            
            <div class="flex items-center mb-4">
                <input type="radio" id="gopay" name="payment" class="form-radio text-pink-600 h-5 w-5" onclick="redirectTo('pembayaran_gopay.php?total=<?php echo number_format($_GET['total']) ?>')">
                <label for="gopay" class="ml-3">GoPay</label>
            </div>
            <div class="flex items-center mb-4">
                <input type="radio" id="ovo" name="payment" class="form-radio text-pink-600 h-5 w-5" onclick="redirectTo('pembayaran_ovo.php?total=<?php echo number_format($_GET['total']) ?>')">
                <label for="ovo" class="ml-3">OVO</label>
            </div>
            <div class="flex items-center mb-4">
                <input type="radio" id="qris" name="payment" class="form-radio text-pink-600 h-5 w-5" onclick="redirectTo('pembayaran_qris.php?total=<?php echo number_format($_GET['total']) ?>')">
                <label for="qris" class="ml-3">QRIS</label>
            </div>
        </form>
        <script>
            function redirectTo(page) {
                window.location.href = page;
            }
        </script>
    </section> 
  </div>
   
</body>
</html>
