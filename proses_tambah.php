<?php
include 'config.php'; // Pastikan Anda sudah membuat file config.php untuk koneksi database

if (isset($_POST['submit'])) {
    $nama_produk = mysqli_real_escape_string($conn, $_POST['nama_produk']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $harga_produk = mysqli_real_escape_string($conn, $_POST['harga_produk']);

    // Proses upload foto
    $foto = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];
    $target_dir = "img/";
    $target_file = $target_dir . basename($foto);

    // Validasi file
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
    $file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (in_array($file_extension, $allowed_types)) {
        // Pindahkan file ke folder img
        if (move_uploaded_file($tmp_name, $target_file)) {
            // Query untuk menyimpan data
            $sql = "INSERT INTO tb_produk (nama_produk, kategori, harga_produk, foto) 
                    VALUES ('$nama_produk', '$kategori', '$harga_produk', '$foto')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Produk berhasil ditambahkan!'); window.location.href = 'index.php';</script>";
            } else {
                echo "<script>alert('Gagal menyimpan data ke database!');</script>";
            }
        } else {
            echo "<script>alert('Gagal mengupload foto!');</script>";
        }
    } else {
        echo "<script>alert('Format file tidak didukung!');</script>";
    }
}
?>
