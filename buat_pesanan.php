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
    <form action="buat_pesanan_proses.php" method="POST">
       <div class="col-md-12">
        <div class="text-bold">Masukan Kedalam keranjang </div>
       </div>
       <div class="row" >
        <img src="img/<?= $produk['foto']; ?>" alt="Foto Produk" width="150px" height="100px" style="border-radius:50px;">

        <div class="col-md-6" style="margin-top:20px;">
            <div class="form-group">
                <label class="label">Nama Produk</label>
                <font size="3" style="font-weight:bold;" ><?php echo $produk['nama_produk'] ?></font> 
            </div>
       </div>
       <div class="col-md-6">
            <div class="form-group">
                <label class="label">Harga Produk</label>
                <font size="3" style="font-weight:bold;" ><?php echo $produk['harga_produk'] ?></font> 
            </div>
       </div>
       <div class="col-md-6">
            <div class="form-group">
                <label class="label">Kategori</label>
                <font size="3" style="font-weight:bold;" ><?php echo $produk['kategori'] ?></font> 
            </div>
       </div>
       <div class="col-md-6">
            <div class="form-group">
                <label class="label">Jumlah Pembelian</label>
                <font size="3" style="font-weight:bold;" >
                    <input name="jumlah" id="jumlah" type="number" value="1" onchange="hitungTotal();" onkeyup="hitungTotal();">
                </font> 
            </div>
       </div>
       <script>
        function hitungTotal() {
            const hargaProduk = <?php echo $produk['harga_produk'] ?>;
            const jumlahBeli = parseInt(document.getElementById('jumlah').value) || 0;
            const totalHarga = hargaProduk * jumlahBeli;
            document.getElementById('total_harga').innerHTML = totalHarga.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
            document.getElementById('total_harga_value').value = totalHarga;
        }
       </script>
       <div class="col-md-6">
            <div class="form-group">
                <label class="label">Total Harga</label>
                <font size="3" style="font-weight:bold;" id="total_harga" ><?php echo $produk['harga_produk']*1 ?></font> 
                <input type="hidden" name="produk_id" id="produk_id" value="<?php echo $produk['id_produk']  ?>"> 
                <input type="hidden" name="total_harga_value" id="total_harga_value" value="<?php echo $produk['harga_produk']*1 ?>"> 
            </div>
       </div>
       <div class="col-md-6">
            <div class="form-group"> 
                <button type="submit" style="padding:10px;width:20%;margin-top:10px;">Masukan keranjang<button>
            </div>
       </div>
        </form>
    </section> 
  </div>
   
</body>
</html>
