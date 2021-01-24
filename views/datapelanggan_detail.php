<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Pelanggan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tb_pelanggan WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID Pelanggan</td> <td><?= $data['id_pelanggan'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama </td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
						<tr>
                            <td>No KTP</td> <td><?= $data['no_ktp'] ?></td>
                        </tr>
                        <tr>
                            <td>Produk Layanan</td> <td><?= $data['produk_layanan'] ?></td>
                        </tr>
                        <tr>
                            <td>Peruntunan</td> <td><?= $data['peruntunan'] ?></td>
                        </tr>
                        <tr>
                            <td>Tarif/Daya</td> <td><?= $data['tarif'] ?> / <?= $data['daya'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                        </tr>
                        <tr>
                            <td>Periode</td> <td><?= $data['bulan_pemakaian'] ?><?= $data['tahun'] ?></td>
                        </tr>
                        <tr>
                            <td>Status</td> <td><?= $data['status'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=datapelanggan&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pelanggan </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

