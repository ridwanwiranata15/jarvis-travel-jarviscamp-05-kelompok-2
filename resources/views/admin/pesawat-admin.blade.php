<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/pesawat_admin.css">
    <link rel="stylesheet" href="../css/remixicon.css">
    <title>Data Pesawat</title>
</head>
<body>
    <div class="left-section">
        <div class="sidebar">
            <h2>Jarvis <br> Travel</h2>
            <div class="item active">

                <h3>Bandara</h3>
            </div>
            <div class="item">

                <h3>Pesawat</h3>
            </div>
            <div class="item">

                <h3>Pelanggan</h3>
            </div>
            <div class="item">

                <h3>Pesanan</h3>
            </div>
        </div>
        <div class="sign-out">
            <h3>Sign Out</h3>
        </div>        
    </div>
    <div class="main">
        <div class="header">
            <div class="search">
                <button>Search</button>
                <input type="text" placeholder="" placeholder="Search">
            </div>
        </div>
        <h3 class="seperator-pesawat">
            Data Pesawat
            <button>Tambah Pesawat</button>
        </h3>
        <div class="quick-access">
            <table class="quick-access-table-pesawat">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor penerbangan</th>
                        <th>Nama maskapai</th>
                        <th>Bandara berangkat</th>
                        <th>Bandara tiba</th>
                        <th>Waktu berangkat</th>
                        <th>Waktu tiba</th>
                        <th>Harga</th>
                        <th>Total kursi</th>
                        <th>Kursi tersedia</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-id="1">
                        <td>No</td>
                        <td>Nomor penerbangan</td>
                        <td>Nama Maskapai       </td>
                        <td>Bandara berangkat</td>
                        <td>Bandara tiba</td>
                        <td>Waktu berangkat</td>
                        <td>Waktu tiba</td>
                        <td>Harga</td>
                        <td>Total kursi</td>
                        <td>Kursi tersedia</td>
                        <td>
                            <button onClick="EditPlanes(1)">Ubah</button>
                            <button>Detail</button>
                            <form action="" method="post">
                                <button>Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-add-planes">
            <div class="modal-add-planes-content">
                <div class="modal-add-planes-header">
                    <h3>Tambah Pesawat</h3>
                    <span>X</span>
                </div>
                <div class="modal-add-planes-content">
                    <form action="">
                        <table class="add-planes">
                            <tr>
                                <td>Nomor penerbangan</td>
                                <td>:</td>
                                <td>
                                    <input type="text" placeholder="Nomor penerbangan" name="nomor penerbangan">
                                    <span class="alert-message"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama maskapai</td>
                                <td>:</td>
                                <td>
                                    <input type="text" placeholder="Nama maskapai" name="Nama maskapai">
                                    <span class="alert-message"></span>       
                                </td>
                            </tr>
                            <tr>
                                <td>Bandara Awal</td>
                                <td>:</td>
                                <td>
                                    <input type="text" placeholder="Bandara Awal" name="Bandara Awal">
                                    <span class="alert-message"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Bandara tiba</td>
                                <td>:</td>
                                <td><input type="text" placeholder="Bandara tiba" name="Bandara tiba">
                                    <span class="alert-message"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Waktu berangkat</td>
                                <td>:</td>
                                <td><input type="text" placeholder="Waktu berangkat" name="Waktu berangkat">
                                    <span class="alert-message"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Waktu tiba</td>
                                <td>:</td>
                                <td><input type="text" placeholder="Waktu tiba" name="Waktu tiba">
                                    <span class="alert-message"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td><input type="text" placeholder="Harga" name="Harga">
                                    <span class="alert-message"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Total kursi</td>
                                <td>:</td>
                                <td><input type="text" placeholder="Total kursi" name="Total kursi"> 
                                    <span class="alert-message"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Kursi Tersedia</td>
                                <td>:</td>
                                <td>
                                    <input type="text" placeholder="Kursi Tersedia" name="Kursi Tersedia">
                                    <span class="alert-message"></span>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="modal-add-planes-footer">
                    <button>Tambah</button>
                </div>
            </div>
        </div>
        <div class="modal-edit-planes">
            <div class="modal-edit-planes-content">
                <div class="modal-edit-planes-header">
                    <h3>Ubah pesawat</h3>
                    <span>X</span>
                </div>
                <div class="modal-edit-planes-content">
                    <form action="">
                        <table class="edit-planes">
                            <tr>
                                <td>Nomor penerbangan</td>
                                <td>:</td>
                                <td>
                                    <input type="text" placeholder="Nomor penerbangan">
                                </td>
                            </tr>
                            <tr>
                                <td>Nama maskapai</td>
                                <td>:</td>
                                <td><input type="text" placeholder="Nama maskapai"></td>
                            </tr>
                            <tr>
                                <td>Bandara Awal</td>
                                <td>:</td>
                                <td><input type="text" placeholder="Bandara Awal"></td>
                            </tr>
                            <tr>
                                <td>Bandara tiba</td>
                                <td>:</td>
                                <td><input type="text" placeholder="Bandara tiba"></td>
                            </tr>
                            <tr>
                                <td>Waktu berangkat</td>
                                <td>:</td>
                                <td><input type="text" placeholder="Waktu berangkat"></td>
                            </tr>
                            <tr>
                                <td>Waktu tiba</td>
                                <td>:</td>
                                <td><input type="text" placeholder="Waktu tiba"></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td><input type="text" placeholder="Harga"></td>
                            </tr>
                            <tr>
                                <td>Total kursi</td>
                                <td>:</td>
                                <td><input type="text" placeholder="Total kursi"></td>
                            </tr>
                            <tr>
                                <td>Kursi Tersedia</td>
                                <td>:</td>
                                <td><input type="text" placeholder="Kursi Tersedia"></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="modal-edit-planes-footer">
                    <button>Ubah</button>
                </div>
            </div>
        </div>
    </div>
<script src="../js/index.js"></script>
</body>
</html>