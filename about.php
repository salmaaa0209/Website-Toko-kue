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
  /* General styling for the page */
body {
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f9;
  color: #333;
}

/* Heading */
h2 {
  font-size: 2rem;
  font-weight: bold;
  color: #2e3d49;
  margin-bottom: 20px;
  text-align: center;
  text-transform: uppercase;
  text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); /* Add text-shadow for better readability */
}

/* Styling for the about section */
.content-about {
  width: 80%;
  max-width: 1000px;
  margin: 50px auto;
  padding: 30px; /* Add padding to create more space */
  background-color: #f8c9d7; /* Soft pink background */
  border-radius: 15px; /* Rounded corners */
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); /* Darker and more prominent shadow */
  background-image: linear-gradient(135deg, #f8c9d7, #e6a2bc); /* Gradient background */
  transition: all 0.3s ease;
}

/* Hover effect for content-about */
.content-about:hover {
  transform: translateY(-5px); /* Slight lift on hover */
}

/* Paragraph styles */
.content-about p {
  font-size: 1.1rem;
  line-height: 1.8;
  color: #555;
  margin-bottom: 15px;
  text-align: justify;
  text-justify: inter-word;
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1); /* Soft shadow to improve text readability */
}

.content-about p:last-child {
  margin-bottom: 0;
}

/* Welcome paragraph styling */
.content-about p:first-child {
  font-size: 1.2rem;
  font-weight: bold;
  color: #6d4c41;
  margin-bottom: 25px;
  text-align: center;
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1); /* Add soft shadow on first paragraph */
}

/* Visual divider between paragraphs */
.content-about p + p {
  border-top: 1px solid #e0e0e0;
  padding-top: 15px;
  margin-top: 20px;
}

/* Spacing between sections */
br {
  margin-bottom: 20px;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
  .content-about {
    width: 90%;
    padding: 20px;
  }

  h2 {
    font-size: 1.8rem;
  }

  .content-about p {
    font-size: 1rem;
  }
}



</style>
</head>
<body>
 

  <!-- Content -->
  <div class="container">
    <!-- Home -->
    <section class="home" id="home">
    <h2>About</h2>
        </div>
        <div class="content-about">
          <h2>Selamat datang di Café Sweet Memories</h2>
          <br />
          <p>
            Selamat datang di Sweet Memories Café, tempat di mana kami menganggap
            dessert dan appetizer bukan hanya sekadar hidangan, tetapi juga
            sebuah pengalaman yang memanjakan lidah dan mengangkat semangat Anda.
          
            Kami hanya menggunakan bahan-bahan berkualitas terbaik dari berbagai
            sumber, yang dipilih secara hati-hati untuk memastikan cita rasa
            yang sempurna dalam setiap gigitan. Dari donut lembut hingga
            pinwheels bayam yang segar, setiap hidangan kami disajikan dengan
            cinta dan perhatian atas detail.
        
            Di Sweet Memories Café, kami berkomitmen untuk menjaga kualitas dan
            keberlanjutan dalam setiap aspek bisnis kami. Kami bekerja sama
            dengan para produsen lokal yang peduli lingkungan untuk mendukung
            keberlanjutan lingkungan dan memastikan kesejahteraan komunitas
            mereka.

            Bergabunglah dengan kami di Sweet Memories Café, dan mari
            bersama-sama mengeksplorasi dunia rasa yang menakjubkan dan
            menciptakan kenangan manis yang tak terlupakan. Terima kasih telah
            memilih Sweet Memories Café sebagai tujuan kuliner Anda. Kami tidak sabar
            untuk menyambut Anda dengan hangat di kafe kami segera!          
    
            Terima kasih telah memilih Sweet Memories Café sebagai destinasi kuliner
            Anda. Kami sangat berharap dapat mengundang Anda untuk merasakan
            kenikmatan dari hidangan lezat kami dalam waktu dekat!
          </p>
    </section> 
  </div>
   
</body>
</html>
