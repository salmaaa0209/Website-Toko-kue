<?php
include "config.php";

// Ambil data yang dikirimkan melalui form
$id_produk = $_POST['id'];
$product_name = $_POST['nama'];
$product_price = $_POST['harga'];
$product_category = $_POST['kategori'];

// Menangani upload gambar jika ada
$product_image = $_FILES['foto']['name']; // Gambar baru (jika ada)

if ($product_image) {
    // Mengambil ekstensi file
    $ext = pathinfo($product_image, PATHINFO_EXTENSION);
    $new_image_name = uniqid() . '.' . $ext;

    // Mengecek jika terjadi kesalahan pada file upload
    if ($_FILES['foto']['error'] != UPLOAD_ERR_OK) {
        echo "Error Upload: " . $_FILES['foto']['error'];
        exit;
    }

    // Upload file
    if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'img/' . $new_image_name)) {
        echo "Gagal meng-upload gambar.";
        exit;
    }
} else {
    // Jika gambar tidak di-upload, gunakan gambar lama
    $sql = "SELECT foto FROM tb_produk WHERE id_produk = $id_produk";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);
    $new_image_name = $product['foto'];
}

// Update data produk di database
$sql = "UPDATE tb_produk SET 
            nama_produk = '$product_name',
            harga_produk = '$product_price',
            kategori = '$product_category',
            foto = '$new_image_name' 
        WHERE id_produk = $id_produk";

if ($query=mysqli_query($conn,$sql)) {
    echo "Produk berhasil diperbarui!";
    header("Location: index.php"); // Redirect setelah sukses
} else {
    echo "Gagal memperbarui produk: " . $conn->error;
}
?>
