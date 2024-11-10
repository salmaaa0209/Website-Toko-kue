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
  <style>
    .payment-steps {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.payment-steps th, .payment-steps td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
}

.payment-steps th {
    background-color: #1d5aff;
    color: white;
}

.payment-steps td {
    background-color: #f9f9f9;
    color: #333;
}
    </style>
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

    <!-- Tabel langkah-langkah pembayaran dengan OVO -->
    <h1>Silahkan lakukan pembayaran melalui aplikasi OVO :</h1>
    <h2>Rp <?php echo ($_GET['total']) ?></h2>
    <table class="payment-steps">
        <tr>
            <th>Langkah</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>Step 1</td>
            <td>Buka aplikasi OVO di ponsel Anda</td>
        </tr>
        <tr>
            <td>Step 2</td>
            <td>Pilih menu "Transfer" atau "Scan QR"</td>
        </tr>
        <tr>
            <td>Step 3</td>
            <td>Scan kode QR yang tersedia atau masukkan nomor tujuan</td>
        </tr>
        <tr>
            <td>Step 4</td>
            <td>Masukkan jumlah pembayaran: Rp <?php echo ($_GET['total']) ?></td>
        </tr>
        <tr>
            <td>Step 5</td>
            <td>Konfirmasi pembayaran dan tekan "Lanjut"</td>
        </tr>
        <tr>
            <td>Step 6</td>
            <td>Selesai! Pastikan pembayaran telah berhasil.</td>
        </tr>
    </table>
    <a href="pembayaran_selesai.php?total=<?php echo ($_GET['total']) ?>&metode=OVO"><button style="padding:5px;width:50%">Selesaikan Pembayaran</button></a>

</section>


  </div>
   
</body>
</html>
