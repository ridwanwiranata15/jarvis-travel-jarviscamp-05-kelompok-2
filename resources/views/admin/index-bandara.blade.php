@extends('template')
@section('seperator')
<h3 class="seperator-airport">
    Data bandara
    <button>Tambah bandara</button>
</h3>
@endsection
@section('title', 'Data Bandara')
@section('table')
<div class="quick-access">
    <table class="quick-access-table-airport">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bandara</th>
                <th>Kota</th>
                <th>Wilayah</th>
            </tr>
        </thead>
        <tbody>
            <tr data-id="1">
                <td>No</td>
                <td>Nama Bandara</td>
                <td>Kota</td>
                <td>Wilayah</td>
                <td>
                    <button onClick="EditAirport(1)">Ubah</button>
                    <form action="" method="post">
                        <button>Hapus</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
@section('modal-add')
<div class="modal-add-airport">
    <div class="modal-add-airport-content">
        <div class="modal-add-airport-header">
            <h3>Tambah Bandara</h3>
            <span>X</span>
        </div>
        <div class="modal-add-airport-content">
            <form action="">
                <table class="add-airport">
                    <tr>
                        <td>Nama Bandara</td>
                        <td>:</td>
                        <td>
                            <input type="text" placeholder="Nama Bandara" name="nama Bandara">
                            <span class="alert-message"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Kota</td>
                        <td>:</td>
                        <td>
                            <input type="text" placeholder="Kota" name="Kota">
                            <span class="alert-message"></span>       
                        </td>
                    </tr>
                    <tr>
                        <td>Wilayah</td>
                        <td>:</td>
                        <td>
                            <input type="text" placeholder="Wilayah" name="Wilayah">
                            <span class="alert-message"></span>
                        </td>
                    </tr>
                   
                </table>
            </form>
        </div>
        <div class="modal-add-airport-footer">
            <button>Tambah</button>
        </div>
    </div>
</div>
@endsection
@section('modal-edit')
<div class="modal-edit-airport">
    <div class="modal-edit-airport-content">
        <div class="modal-edit-airport-header">
            <h3>Ubah bandara</h3>
            <span>X</span>
        </div>
        <div class="modal-edit-airport-content">
            <form action="">
                <table class="edit-airport">
                    <tr>
                        <td>Nama Bandara</td>
                        <td>:</td>
                        <td>
                            <input type="text" placeholder="Nama Bandara" name="nama Bandara">
                            <span class="alert-message"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Kota</td>
                        <td>:</td>
                        <td>
                            <input type="text" placeholder="Kota" name="Kota">
                            <span class="alert-message"></span>       
                        </td>
                    </tr>
                    <tr>
                        <td>Wilayah</td>
                        <td>:</td>
                        <td>
                            <input type="text" placeholder="Wilayah" name="Wilayah">
                            <span class="alert-message"></span>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="modal-edit-airport-footer">
            <button>Ubah</button>
        </div>
    </div>
</div>
@endsection