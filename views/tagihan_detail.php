<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Tagihan Listrik Pascabayar</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail tagihan-->
                    <?php
                    $sql = "SELECT *FROM tagihan WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">IDPEL</td> <td><?= $data['idpel'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td> <td><?= $data['nama_pel'] ?></td>
                        </tr>
						<tr>
                            <td>Periode</td> <td><?= $data['periode'] ?><?= $data['tahun_per'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Bayar</td> <td><?= $data['tgl_bayar'] ?></td>
                        </tr>
                        <tr>
                            <td>Rp Admin</td>  <td><b><?php echo "Rp. " . number_format($data['rp_admin'], 2, ",", "."); ?></b></td>
                        </tr>
						<tr>
                            <td>Rp Tagihan</td> <td><b><?php echo "Rp. " . number_format($data['rp_tagihan'] , 2, ",", "."); ?></b></td>
                        </tr>
                        <tr>
                            <td>Rp Bayar</td> <td><b><?php echo "Rp. " . number_format( $data['rp_bayar'], 2, ",", "."); ?></b></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=tagihan&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Tagihan Listrik </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

