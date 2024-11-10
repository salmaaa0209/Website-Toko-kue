<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kue</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h2>Tambah Produk Kue</h2>
    <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
        <label for="nama_produk">Nama Produk:</label><br>
        <input type="text" name="nama_produk" required><br><br>
        
        <label for="kategori">Kategori:</label><br>
        <select name="kategori" required>
              <option value="">Select category</option>
                    <option value="Dessert">Dessert</option>
                    <option value="Appetizer">Appetizer</option>
                    <option value="New Product">New Product</option>
        </select><br><br>

        <label for="harga_produk">Harga Produk (Rp):</label><br>
        <input type="number" name="harga_produk" required><br><br>
        
        <label for="foto">Foto Produk:</label><br>
        <input type="file" name="foto" accept="image/*" required><br><br>
        
        <button type="submit" name="submit">Tambah Produk</button>
    </form>
</body>
</html>
