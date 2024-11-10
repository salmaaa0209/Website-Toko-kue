<?php 
include "config.php";
$sql = "SELECT * FROM tb_produk";
$query = mysqli_query($conn, $sql);
//cek kategori
$sql2 = "SELECT kategori FROM tb_produk";
$query2 = mysqli_query($conn,$sql2);

$kategori = mysqli_fetch_assoc($query2);
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
      <div class="judul-content">
        <h2>Selamat Datang Di Café Sweet Memories</h2>
      </div>
      <div class="gambar">
        <img src="img/toko.jpg" alt="gambar-cupcake" />
      </div>
      <div class="content-home">
        <p>
        Café Sweet Memories bukan hanya sekadar tempat untuk mencicipi makanan penutup dan pembuka yang lezat, tetapi juga merupakan hasil dari sebuah perjalanan panjang dan cinta yang mendalam terhadap seni kuliner. Keluarga kami telah mewariskan tradisi kuliner yang kaya selama berabad-abad, dan kami membangun toko ini dengan menggabungkan warisan tersebut dengan sentuhan kreativitas modern.

Appetizer        </p>
      </div>
    </section>

    <?php
// Ambil produk dari database
$sqlProduk = "SELECT * FROM tb_produk";
$queryProduk = mysqli_query($conn, $sqlProduk);
?>

<!-- Product Section -->
<section class="product" id="product" style="margin-bottom: 50px;">
  <div class="judul-product">
    <h2 style="font-size: 24px; font-weight: bold; text-align: center; margin-bottom: 20px;">Appetizer</h2>
  </div>
  <div class="gambar-product" style="display: flex; flex-wrap: wrap; justify-content: space-between; flex-direction: row-reverse;">
    <?php while ($cupcake = mysqli_fetch_assoc($queryProduk)) : ?>
      <?php if ($cupcake['kategori'] == "Appetizer") : ?>
        <div class="image" style="width: 200px; margin: 10px; text-align: center; border: 1px solid #ccc; padding: 10px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
          <img src="img/<?= $cupcake['foto']; ?>" alt="gambar-product" width="150px" height="100px" style="object-fit: cover; border-radius: 5px;">
          <p style="font-size: 16px; margin: 10px 0;"><?= $cupcake['nama_produk']; ?></p>
          <p style="font-size: 14px; color: #f57c00;">Rp.<?= number_format($cupcake['harga_produk']); ?></p>
          <a href="buat_pesanan.php?id=<?= $cupcake['id_produk']; ?>">
            <button class="btn btn-primary" style="background-color: #4CAF50; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer; margin-top: 10px;">
              <i class="fa-solid fa-shopping-cart"></i> Masukan Keranjang
            </button>
          </a>
          <br>
          <a href="edit_produk.php?id=<?= $cupcake['id_produk']; ?>">
            <button class="btn btn-primary" style="background-color: #FF9800; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer; margin-top: 10px;">
              Edit
            </button>
          </a> 
          <a href="hapus_produk.php?id=<?= $cupcake['id_produk']; ?>" onclick="return confirm('Barang akan dihapus')" style="text-decoration: none;">
            <button class="btn btn-primary" style="background-color: #f44336; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer; margin-top: 10px;">
              Hapus
            </button>
          </a>
        </div>
      <?php endif; ?>
    <?php endwhile; ?>
  </div>
</section>
<?php
// Ambil produk dari database
$sqlProduk = "SELECT * FROM tb_produk";
$queryProduk = mysqli_query($conn, $sqlProduk);
?>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Untuk kategori Dessert -->
<section class="product" id="product" style="margin-bottom: 50px;">
  <div class="judul-product">
    <h2 style="font-size: 24px; font-weight: bold; text-align: center; margin-bottom: 20px;">Dessert</h2>
  </div>
  <div class="gambar-product" style="display: flex; flex-wrap: wrap; justify-content: space-between; flex-direction: row-reverse;">
    <?php while ($cupcake2 = mysqli_fetch_assoc($queryProduk)) : ?> 
      <?php if ($cupcake2['kategori'] == "Dessert") : ?>
        <div class="image" style="width: 200px; margin: 10px; text-align: center; border: 1px solid #ccc; padding: 10px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
          <img src="img/<?= $cupcake2['foto']; ?>" alt="gambar-product" width="150px" height="100px" style="object-fit: cover; border-radius: 5px;">
          <p style="font-size: 16px; margin: 10px 0;"><?= $cupcake2['nama_produk']; ?></p>
          <p style="font-size: 14px; color: #f57c00;">Rp.<?= number_format($cupcake2['harga_produk']); ?></p>
          <a href="buat_pesanan.php?id=<?= $cupcake2['id_produk']; ?>">
            <button class="btn btn-primary" style="background-color: #4CAF50; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer; margin-top: 10px;">
              <i class="fa-solid fa-shopping-cart"></i> Masukan Keranjang
            </button>
          </a>
          <br>
          <a href="edit_produk.php?id=<?= $cupcake2['id_produk']; ?>">
            <button class="btn btn-primary" style="background-color: #FF9800; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer; margin-top: 10px;">
              Edit
            </button>
          </a> 
          <a href="hapus_produk.php?id=<?= $cupcake2['id_produk']; ?>" onclick="return confirm('Barang akan dihapus')" style="text-decoration: none;">
            <button class="btn btn-primary" style="background-color: #f44336; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer; margin-top: 10px;">
              Hapus
            </button>
          </a>
        </div>
      <?php endif; ?>
    <?php endwhile; ?>
  </div>
</section>




    <!-- Contact Section --> 
     <!-- Contact Section -->
<section class="contact" id="contact" style="display: flex; justify-content: space-between; gap: 20px; flex-wrap: wrap;">
  <div class="judul-contact" style="flex: 1 1 100%; text-align: center;">
    <h2>Contact Us</h2>
  </div>
  
  <div class="card" style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 20px; flex: 1 1 100%;">
    <div class="card-2" style="flex: 1 1 300px; border: 1px solid #ccc; padding: 20px; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
      <h3>Contact</h3>
      <ul style="list-style: none; padding: 0;">
        <li style="margin-bottom: 10px;">
          <a href="https://maps.app.goo.gl/wagM31KPMoEU1hNW7">
            <i class="fa-solid fa-location-dot"></i> SMKN 1 GANTAR, No.3, Gantar, Indramayu
          </a>
        </li>
        <li style="margin-bottom: 10px;">
          <a href="mailto:ichalivina76@gmail.com">
            <i class="fa-solid fa-envelope"></i> Email: ichalivina76@gmail.com
          </a>
        </li>
        <li style="margin-bottom: 10px;">
          <a href="https://wa.me/6285923520135">
            <i class="fa-solid fa-phone"></i> Phone (+62) 859 2352 0135
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Comments Section -->
<section id="comment" style="margin-top:200px; display: flex; justify-content: center;">
  <div class="comment-box" style="max-width: 500px; width: 100%; border: 1px solid #ccc; padding: 20px; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
    <h2>Comments</h2>
    <form action="#">
      <input type="text" name="full_name" placeholder="Full Name..." required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 10px;">
      <input type="email" name="email" placeholder="Email Address..." required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 10px;">
      <textarea name="comment" placeholder="Type Your Comment..." required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 10px;"></textarea>
      <button type="submit" style="padding: 10px; border: none; background-color: #007BFF; color: #fff; border-radius: 5px; cursor: pointer;">Submit Comment</button>
    </form>
  </div>
</section>

  </div>
  
  <footer style="position: fixed; bottom: 0; width: 100%;  color: white; text-align: center; padding: 10px;">
  <div class="copyright">
    <h4>Created By <span>Kelompok Booyah!</span></h4>
  </div>
</footer>

</body>
</html>
