<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Tagihan Listrik</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tagihan WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Tagihan Listrik Pascabayar </h2>
                        <h4>East Aek Kanopan, Kualu Hulu, Labuhan Batu Utara <br> Kabupaten Labuhanbatu Utara, Sumatera Utara, 21457</h4>
                        <hr>
                        <h3>DATA TAGIHAN LISTRIK</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
                                <tr>
                                    <td>IDPEL</td> <td><?= $data['idpel'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Nama</td> <td><?= $data['nama_pel'] ?></td>
                                </tr>
                                <tr>
                                    <td>Periode</td><strong><?= $data['periode'] ?> - <?= $data['tahun_per'] ?></strong> </td>
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

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Aek Kanopan  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag PLN, S.T.<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
