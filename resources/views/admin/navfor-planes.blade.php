`<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/navfor-planes.css" />
    <link rel="stylesheet" href="../css/remixicon.css" />
    <title>Asmr programminng for terbang.yuk</title>
  </head>
  <body>
    <div class="left-section">
      <div class="sidebar">
        <h2>Terbang Yuk</h2>
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
          <input type="text" placeholder="" placeholder="Search" />
        </div>
      </div>
      <h3 class="seperator-pesawat-detail">Detail Pesawat (Nama maskapai)</h3>

      <div class="container-content-detail-planes">
        <div class="detail-planes">
          <table class="table-detail-planes">
            <tr>
              <td>Nama maskapai</td>
              <td>:</td>
              <td>(Namanya)</td>
            </tr>
            <tr>
              <td>Bandara asal</td>
              <td>:</td>
              <td>(Bandara asal)</td>
            </tr>
            <tr>
              <td>Bandara tujuan</td>
              <td>:</td>
              <td>(Bandara tujuan)</td>
            </tr>
            <tr>
              <td>Waktu berangkat</td>
              <td>:</td>
              <td>(Waktu berangkat)</td>
            </tr>
            <tr>
              <td>Waktu tiba</td>
              <td>:</td>
              <td>(Waktu tiba)</td>
            </tr>
            <tr>
              <td>Harga</td>
              <td>:</td>
              <td>(harga)</td>
            </tr>
            <tr>
              <td>Total kursi</td>
              <td>:</td>
              <td>(Total kursi)</td>
            </tr>
            <tr>
              <td>kursi tersedia</td>
              <td>:</td>
              <td>(kursi tersedia)</td>
            </tr>
          </table>
        </div>
        <div class="form-detail-planes">
          <div class="more">
            <div class="more-header">
              <h3>Syarat dan ketentuan</h3>
              <button>+Tambah</button>
            </div>
            <div class="more-content">
              <table class="more">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-id="1">
                    <td>No</td>
                    <td>Nama</td>
                    <td>
                      <button onClick="editDataSyarat(1)">Edit</button>
                      <button>Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="more">
            <div class="more-header">
              <h3>Refund</h3>
            </div>
            <div class="more-content">
              <div class="list-more">
                <h4>Syarat dan Ketentuan</h4>
                <span>></span>
              </div>
              <div class="list-more-content">
                <div class="more">
                  <div class="more-header">
                    <h3>Syarat dan ketentuan</h3>
                    <button>+Tambah</button>
                  </div>
                  <div class="more-content">
                    <table class="more">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-id="1">
                          <td>No</td>
                          <td>Nama</td>
                          <td>
                            <button onClick="editDataRefundSyarat(1)">Edit</button>
                            <button>Delete</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="list-more">
                <h4>Kebijakan refund anda</h4>
                <span>></span>
              </div>
              <div class="list-more-content">
                <div class="more">
                  <div class="more-header">
                    <h3>Kebijakan refund anda</h3>
                    <button>+Tambah</button>
                  </div>
                  <div class="more-content">
                    <table class="more">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-id="1">
                          <td>No</td>
                          <td>Nama</td>
                          <td>
                            <button onClick="editDataKebijakanrefund(1)">Edit</button>
                            <button>Delete</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="list-more">
                <h4>Estinasi Refund</h4>
                <span>></span>
              </div>
              <div class="list-more-content">
                <div class="more">
                  <div class="more-header">
                    <h3>Estinasi Refund</h3>
                    <button>+Tambah</button>
                  </div>
                  <div class="more-content">
                    <table class="more">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-id="1">
                          <td>No</td>
                          <td>Nama</td>
                          <td>
                            <button onClick="editDataEstinasiRefund(1)">Edit</button>
                            <button>Delete</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="list-more">
                <h4>Proses refund</h4>
                <span>></span>
              </div>
              <div class="list-more-content">
                <div class="more">
                  <div class="more-header">
                    <h3>Proses refund</h3>
                    <button>+Tambah</button>
                  </div>
                  <div class="more-content">
                    <table class="more">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-id="1">
                          <td>No</td>
                          <td>Nama</td>
                          <td>
                            <button onClick="editDataProsesrefund(1)">Edit</button>
                            <button>Delete</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="list-more">
                <h4>Informasi lainnya</h4>
                <span>></span>
              </div>
              <div class="list-more-content">
                <div class="more">
                  <div class="more-header">
                    <h3>Informasi lainnya</h3>
                    <button>+Tambah</button>
                  </div>
                  <div class="more-content">
                    <table class="more">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-id="1">
                          <td>No</td>
                          <td>Nama</td>
                          <td>
                            <button onClick="editDataInformasilainnya(1)">Edit</button>
                            <button>Delete</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="more">
            <div class="more-header">
              <h3>Reshcedule</h3>
            </div>
            <div class="more-content">
              <div class="list-more">
                <h4>Kebijakan umum</h4>
                <span>></span>
              </div>
              <div class="list-more-content">
                <div class="more">
                  <div class="more-header">
                    <h3>Kebijakan umum</h3>
                    <button>+Tambah</button>
                  </div>
                  <div class="more-content">
                    <table class="more">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-id="1">
                          <td>No</td>
                          <td>Nama</td>
                          <td>
                            <button onClick="editDataKebijakanUmumReschedule(1)">Edit</button>
                            <button>Delete</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="list-more">
                <h4>Periode reschedule</h4>
                <span>></span>
              </div>
              <div class="list-more-content">
                <div class="more">
                  <div class="more-header">
                    <h3>Periode reschedule</h3>
                    <button>+Tambah</button>
                  </div>
                  <div class="more-content">
                    <table class="more">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-id="1">
                          <td>No</td>
                          <td>Nama</td>
                          <td>
                            <button onClick="editDataPeriodereschedule(1)">Edit</button>
                            <button>Delete</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="list-more">
                <h4>Biaya reschedule</h4>
                <span>></span>
              </div>
              <div class="list-more-content">
                <div class="more">
                  <div class="more-header">
                    <h3>Biaya reschedule</h3>
                    <button>+Tambah</button>
                  </div>
                  <div class="more-content">
                    <table class="more">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-id="1">
                          <td>No</td>
                          <td>Nama</td>
                          <td>
                            <button onClick="editDataBiayareschedule(1)">Edit</button>
                            <button>Delete</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="list-more">
                <h4>Proses reschedule</h4>
                <span>></span>
              </div>
              <div class="list-more-content">
                <div class="more">
                  <div class="more-header">
                    <h3>Proses reschedule</h3>
                    <button>+Tambah</button>
                  </div>
                  <div class="more-content">
                    <table class="more">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-id="1">
                          <td>No</td>
                          <td>Nama</td>
                          <td>
                            <button onClick="editDataProsesreschedule(1)">Edit</button>
                            <button>Delete</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="list-more">
                <h4>Informasi lainnya</h4>
                <span>></span>
              </div>
              <div class="list-more-content">
                <div class="more">
                  <div class="more-header">
                    <h3>Informasi lainnya</h3>
                    <button>+Tambah</button>
                  </div>
                  <div class="more-content">
                    <table class="more">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>AkJudul baru</tr>
                      </thead>
                      <tbody>
                        <tr data-id="1">
                          <td>No</td>
                          <td>Nama</td>
                          <td>
                            <button onClick="editDataInformasilainnyaReschedule(1)">Edit</button>
                            <button>Delete</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="more">
            <div class="more-header">
              <h3>Promo</h3>
              <button>+Tambah</button>
            </div>
            <div class="more-content">
              <table class="more">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-id="1">
                    <td>No</td>
                    <td>Nama</td>
                    <td>
                      <button onClick="EditPromo(1)">Edit</button>
                      <button>Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-add-data">
        <div class="modal-add-data-content">
          <div class="modal-add-data-content-header">
            <h2>Syarat dan ketentuan</h2>
            <span>X</span>
          </div>
          <div class="modal-add-data-content-body">
            <form action="">
              <table>
                <tr >
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-add-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-add-data">
        <div class="modal-add-data-content">
          <div class="modal-add-data-content-header">
            <h2>Syarat dan ketentuan Refund</h2>
            <span>X</span>
          </div>
          <div class="modal-add-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-add-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-add-data">
        <div class="modal-add-data-content">
          <div class="modal-add-data-content-header">
            <h2>Kebijakan refund anda</h2>
            <span>X</span>
          </div>
          <div class="modal-add-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-add-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-add-data">
        <div class="modal-add-data-content">
          <div class="modal-add-data-content-header">
          <h2>Estinasi Refund</h2>
            <span>X</span>
          </div>
          <div class="modal-add-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-add-data-content-footer">
            <button>tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-add-data">
        <div class="modal-add-data-content">
          <div class="modal-add-data-content-header">
            <h2>Proses refund</h2>
            <span>X</span>
          </div>
          <div class="modal-add-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-add-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-add-data">
        <div class="modal-add-data-content">
          <div class="modal-add-data-content-header">
           <h2>Informasi lainnya</h2>
            <span>X</span>
          </div>
          <div class="modal-add-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-add-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-add-data">
        <div class="modal-add-data-content">
          <div class="modal-add-data-content-header">
            <h2>Kebijakan umum reschedule</h2>
            <span>X</span>
          </div>
          <div class="modal-add-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input tJudul baruer="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-add-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-add-data">
        <div class="modal-add-data-content">
          <div class="modal-add-data-content-header">
            <h2>Periode reschedule</h2>
            <span>X</span>
          </div>
          <div class="modal-add-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input tJudul baruer="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-add-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-add-data">
        <div class="modal-add-data-content">
          <div class="modal-add-data-content-header">
            <h2>Biaya reschedule</h2>
            <span>X</span>
          </div>
          <div class="modal-add-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-add-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-add-data">
        <div class="modal-add-data-content">
          <div class="modal-add-data-content-header">
            <h2>Proses reschedule</h2>
            <span>X</span>
          </div>
          <div class="modal-add-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-add-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-add-data">
        <div class="modal-add-data-content">
          <div class="modal-add-data-content-header">
            <h2>Informasi lainnya</h2>
            <span>X</span>
          </div>
          <div class="modal-add-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-add-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-add-data">
        <div class="modal-add-data-content">
          <div class="modal-add-data-content-header">
            <h2>Promo</h2>
            <span>X</span>
          </div>
          <div class="modal-add-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-add-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>

      <div class="modal-edit-data">
        <div class="modal-edit-data-content">
          <div class="modal-edit-data-content-header">
            <h2>Syarat dan ketentuan</h2>
            <span>X</span>
          </div>
          <div class="modal-edit-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-edit-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-edit-data">
        <div class="modal-edit-data-content">
          <div class="modal-edit-data-content-header">
            <h2>Syarat dan ketentuan Refund</h2>
            <span>X</span>
          </div>
          <div class="modal-edit-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-edit-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-edit-data">
        <div class="modal-edit-data-content">
          <div class="modal-edit-data-content-header">
            <h2>Kebijakan refund anda</h2>
            <span>X</span>
          </div>
          <div class="modal-edit-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-edit-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-edit-data">
        <div class="modal-edit-data-content">
          <div class="modal-edit-data-content-header">
          <h2>Estinasi Refund</h2>
            <span>X</span>
          </div>
          <div class="modal-edit-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-edit-data-content-footer">
            <button>tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-edit-data">
        <div class="modal-edit-data-content">
          <div class="modal-edit-data-content-header">
            <h2>Proses refund</h2>
            <span>X</span>
          </div>
          <div class="modal-edit-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-edit-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-edit-data">
        <div class="modal-edit-data-content">
          <div class="modal-edit-data-content-header">
           <h2>Informasi lainnya</h2>
            <span>X</span>
          </div>
          <div class="modal-edit-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-edit-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-edit-data">
        <div class="modal-edit-data-content">
          <div class="modal-edit-data-content-header">
            <h2>Kebijakan umum reschedule</h2>
            <span>X</span>
          </div>
          <div class="modal-edit-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input tJudul baruer="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-edit-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-edit-data">
        <div class="modal-edit-data-content">
          <div class="modal-edit-data-content-header">
            <h2>Periode reschedule</h2>
            <span>X</span>
          </div>
          <div class="modal-edit-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input tJudul baruer="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-edit-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-edit-data">
        <div class="modal-edit-data-content">
          <div class="modal-edit-data-content-header">
            <h2>Biaya reschedule</h2>
            <span>X</span>
          </div>
          <div class="modal-edit-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-edit-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-edit-data">
        <div class="modal-edit-data-content">
          <div class="modal-edit-data-content-header">
            <h2>Proses reschedule</h2>
            <span>X</span>
          </div>
          <div class="modal-edit-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-edit-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-edit-data">
        <div class="modal-edit-data-content">
          <div class="modal-edit-data-content-header">
            <h2>Informasi lainnya</h2>
            <span>X</span>
          </div>
          <div class="modal-edit-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-edit-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      <div class="modal-edit-data">
        <div class="modal-edit-data-content">
          <div class="modal-edit-data-content-header">
            <h2>Promo</h2>
            <span>X</span>
          </div>
          <div class="modal-edit-data-content-body">
            <form action="">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>
                    <input type="text" placeholder="nama" name="nama" />
                    <span class="alert-message"></span>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-edit-data-content-footer">
            <button>Tambah</button>
          </div>
        </div>
      </div>
      
    </div>
    <script src="../js/navfor-planes.js"></script>
  </body>
</html>
