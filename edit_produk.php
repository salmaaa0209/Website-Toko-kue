<?php 
include "config.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_produk WHERE id_produk = $id";
    $query = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($query);
}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product Form</title>
    <style type="text/css">
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Quicksand', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f8f9fa;
}

.edit-product-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    width: 100%;
}

.edit-product-container h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #cb80ab;
}

.edit-product-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.form-group label {
    font-weight: 600;
    margin-bottom: 5px;
    color: #6c757d;
}

.form-group input,
.form-group textarea,
.form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    outline: none;
    transition: border-color 0.3s;
}

.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
    border-color: #cb80ab;
}

.form-group textarea {
    resize: vertical;
}

.form-actions {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.form-actions button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.form-actions button[type="submit"] {
    background-color: #ffb0b0;
    color: #fff;
}

.form-actions .cancel-btn {
    background-color: #6c757d;
    color: #fff;
}

.form-actions button:hover {
    background-color: #cb80ab;
}

.form-actions .cancel-btn:hover {
    background-color: #495057;
}

/* Responsive Styling */
@media screen and (max-width: 576px) {
    .edit-product-container {
        padding: 20px;
    }
    .form-actions {
        flex-direction: column;
        gap: 10px;
    }
}

    </style>
</head>
<body>
    <div class="edit-product-container">
        <h2>Edit Product</h2>
        <form class="edit-product-form" method="POST" action="edit_proses.php" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="id" value="<?= $product['id_produk'] ?>">
                <label for="product-name">Product Name:</label>
                <input type="text" id="product-name" name="nama" value="<?= $product['nama_produk'] ?>" required>
            </div>
            <div class="form-group">
                <label for="product-price">Price:</label>
                <input type="number" name="harga" id="product-price"value="<?= $product['harga_produk'] ?>"  required>
            </div>
            <div class="form-group">
                <label for="product-image">Image:</label>
                <input type="file" id="product-image" name="foto" accept="image/*">
            </div>
            <div class="form-group">
                <label for="product-category">Category:</label>
                <select id="product-category" name="kategori" required>
                    <option value="">Select category</option>
                    <option value="Dessert">Dessert</option>
                    <option value="Appetizer">Appetizer</option>
                    <option value="New Product">New Product</option>
                   
                </select>
            </div>
            <div class="form-actions">
                <button type="submit" name="save">Save Changes</button>
                <button type="button" class="cancel-btn">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>
