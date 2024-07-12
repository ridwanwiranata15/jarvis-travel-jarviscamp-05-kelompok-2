<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pembayaran</title>
    <link rel="stylesheet" href="../css/konfirmasi.css">
</head>
<body>
    <div class="container">
        <div class="payment-confirmation">
            <h1>Terima Kasih!</h1>
            <p>Pembayaran Anda telah berhasil.</p>
            <div class="details">
                <h2>Rincian Pembayaran</h2>
                <p><strong>Nama:</strong> <span id="userName">John Doe</span></p>
                <p><strong>Jumlah:</strong> <span id="amount">Rp 1.000.000</span></p>
                <p><strong>Tanggal:</strong> <span id="date">1 Juli 2024</span></p>
            </div>
            <button id="downloadReceipt">Unduh Kwitansi</button>
        </div>
    </div>
    <script src="../js/konfirmasi.js"></script>
</body>
</html>
