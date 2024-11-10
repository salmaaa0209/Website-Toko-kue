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

  <!-- Link Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;900&family=Quicksand:wght@300;700&display=swap" rel="stylesheet" />

  <!-- Link Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>

  <style>
  /* Basic reset for body */
  body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
    color: #333;
  }

  h2, h3 {
    color: #2e3d49;
    text-align: center;
    margin-bottom: 20px;
  }

  h2 {
    font-size: 2rem;
    font-weight: bold;
    text-transform: uppercase;
  }

  h3 {
    font-size: 1.5rem;
    font-weight: bold;
  }

  /* Main contact section */
  .contact {
    width: 80%;
    max-width: 1200px;
    margin: 50px auto;
    padding: 20px;
    background-color: #F8C8D4  ;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  }

  .judul-contact {
    margin-bottom: 40px;
  }

  /* Combined card style */
  .card {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 30px;
    margin-top: 30px;
  }

  .card div {
    flex: 1;
    min-width: 280px; /* Ensuring the cards are responsive */
    background-color: #f8e0e6 ;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
  }

  /* Hover effect for card */
  .card div:hover {
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
    transform: translateY(-5px);
  }

  .card h3 {
    font-size: 1.25rem;
    margin-bottom: 15px;
    color: #333;
  }

  /* Footer content style */
  .content-footer {
    font-size: 1rem;
    color: #777;
    text-align: center;
  }

  .icon-contact ul {
    list-style-type: none;
    padding: 0;
  }

  .icon-contact li {
    font-size: 1rem;
    margin-bottom: 15px;
  }

  .icon-contact a {
    text-decoration: none;
    color: #2e3d49;
    display: flex;
    align-items: center;
  }

  .icon-contact i {
    margin-right: 10px;
    font-size: 1.2rem;
  }

  /* Social media icons in card-3 */
  .sosmed-footer {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    gap: 20px;
  }

  .sosmed-footer a {
    font-size: 1.8rem;
    color: #2e3d49;
    text-decoration: none;
  }

  .sosmed-footer a:hover {
    color: #f36f6f; /* Soft pink hover effect */
  }

  /* Color scheme */
  .card-1 {
    background-color: #F8C8D4 ; 
  }

  .card-2 {
    background-color: #F3C6C8 ; 
  }

  .card-3 {
    background-color: #F2A7C7 ; 
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .card {
      flex-direction: column;
      gap: 20px;
    }

    .icon-contact li {
      font-size: 0.9rem;
    }

    .sosmed-footer a {
      font-size: 1.5rem;
    }
  }
</style>

<body>
  <div class="container">
    <!-- Home -->
    <section class="home" id="home">
      <div class="contact" id="contact">
        <div class="judul-contact">
          <h2>Contact Us</h2>
        </div>
        <div class="card">
          <!-- Card 1 -->
          <div class="card-1">
            <h3>Sweet Memories</h3>
            <div class="content-footer">
              <p>"Indulge in sweetness, delight in every bite."</p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="card-2">
            <h3>Contact</h3>
            <div class="icon-contact">
              <ul>
                <li>
                  <a href="https://maps.app.goo.gl/wagM31KPMoEU1hNW7">
                    <i class="fa-solid fa-location-dot" title="Tidak Memiliki Link"></i>
                    SMKN 1 GANTAR, No.3, Gantar, Indramayu
                  </a>
                </li>
                <li>
                  <a href="mailto:ichalivina76@gmail.com">
                    <i class="fa-solid fa-envelope" title="Tidak Memiliki Link"></i>
                    Email: ichalivina76@gmail.com
                  </a>
                </li>
                <li>
                  <a href="https://wa.me/6285923520135">
                    <i class="fa-solid fa-phone" title="Tidak Memiliki Link"></i>
                    Phone (+62) 859 2352 0135
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="card-3">
            <h3>Follow Us</h3>
            <div class="sosmed-footer">
              <a href="https://www.facebook.com/share/XMV9hRAgmTHLakUW/">
                <i class="fa-brands fa-facebook" title="Tidak Memiliki Link"></i>
              </a>
              <a href="https://www.instagram.com/ichalivina?igsh=MTVkMzhveGdqdWdocg==">
                <i class="fa-brands fa-instagram" title="Tidak Memiliki Link"></i>
              </a>
              <a href="https://www.tiktok.com/@chaacoww?_t=8qHZqGwHezM&_r=1">
                <i class="fa-brands fa-tiktok" title="Tidak Memiliki Link"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
