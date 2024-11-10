<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Selesai</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f5f5f5;
    height: 100vh;
}

.confirmation {
    text-align: center;
    background-color: #fff;
    padding: 40px 20px;
    border-radius: 10px;
    width: 90%;
    max-width: 400px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.success-icon {
    width: 80px;
    margin-bottom: 20px;
}

.confirmation h1 {
    color: #1d5aff;
    font-size: 1.8rem;
    margin-bottom: 10px;
}

.confirmation p {
    color: #555;
    font-size: 1rem;
    margin-bottom: 20px;
}

.transaction-details {
    background-color: #f9f9f9;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
    text-align: left;
}

.transaction-details p {
    margin: 8px 0;
    font-size: 1rem;
    color: #333;
}

.confirmation-buttons {
    display: flex;
    gap: 10px;
    justify-content: center;
}

.button {
    display: inline-block;
    padding: 10px 20px;
    color: white;
    background-color: #1d5aff;
    border-radius: 5px;
    text-decoration: none;
    font-size: 1rem;
}

.button-secondary {
    background-color: #555;
}

.button:hover {
    opacity: 0.9;
}

    </style>
</head>
<body>

<section class="confirmation">
    <div class="confirmation-content">
        <img src="success.png" alt="Success Icon" class="success-icon">
        <h1>Pembayaran Berhasil!</h1>
        <p>Terima kasih! Pembayaran Anda telah berhasil diproses.</p>

        <div class="transaction-details">
            <p><strong>Jumlah Pembayaran:</strong> Rp <?php echo ($_GET['total']) ?></p>
            <p><strong>Metode Pembayaran:</strong> <?php echo ($_GET['metode']) ?></p> 
        </div>

        <div class="confirmation-buttons">
            <a href="index.php" class="button">Kembali ke Beranda</a> 
        </div>
    </div>
</section>

</body>
</html>
