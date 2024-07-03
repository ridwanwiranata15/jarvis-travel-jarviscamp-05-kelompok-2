document.getElementById('downloadReceipt').addEventListener('click', function() {
    const userName = document.getElementById('userName').innerText;
    const amount = document.getElementById('amount').innerText;
    const date = document.getElementById('date').innerText;

    const receiptContent = `
        Terima Kasih!\n
        Pembayaran Anda telah berhasil.\n\n
        Rincian Pembayaran\n
        Nama: ${userName}\n
        Jumlah: ${amount}\n
        Tanggal: ${date}
    `;

    const blob = new Blob([receiptContent], { type: 'text/plain' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'kwitansi.txt';
    a.click();
    URL.revokeObjectURL(url);
});
