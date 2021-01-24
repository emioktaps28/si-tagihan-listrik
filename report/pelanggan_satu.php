<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pelanggan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_pelanggan WHERE id='" . $_GET ['id'] . "'";
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
                        <h2>Sistem Informasi Pembayaran Tagihan Listrik Pascabayar </h2>
                        <h4>East Aek Kanopan, Kualu Hulu, Labuhan Batu Utara <br> Kabupaten Labuhan Batu, Sumatera Utara, 21273</h4>
                        <hr>
                        <h3>DATA Pelanggan</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>IDPEL</td> <td><?= $data['id_pelanggan'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Nama</td> <td><?= $data['nama'] ?></td>
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
                                    <td>Tarif/Daya</td> <td><strong><?= $data['tarif'] ?> / <?= $data['daya'] ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                                </tr>
                                <tr>
                                    <td>Periode</td><strong><?= $data['bulan_pemakaian'] ?> - <?= $data['tahun'] ?></strong> </td>
                                </tr>
								<tr>
                                    <td>Status</td> <td><?= $data['status'] ?></td>
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