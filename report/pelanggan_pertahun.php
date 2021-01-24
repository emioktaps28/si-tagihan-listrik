<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pelanggan Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pembayaran Tagihan Listrik Pascabayar </h2>
                        <h4>East Aek Kanopan, Kualu Hulu, Labuhan Batu Utara <br> Kabupaten Labuhan Batu, Sumatera Utara, 21273</h4>
                        <hr>
                        <h3>DATA PELANGGAN PERTAHUN   <? echo "$ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								<tr>
                                    <th>No.</th><th width="17%"><center>IDPEL</center></th><th><center>Nama</center></th><th width="14%"><center>Alamat</center></th><th width="14%"><center>NO KTP</center></th><th width="14%"><center>Produk Layanan</center></th><th width="14%"><center>Peruntunan</center></th>
                                    <th width="14%"><center>Tarif/Daya</center></th><th width="14%"><center>Tanggal Masuk</center></th><th width="10%"><center>Periode</center></th><th><center>Status</center></th>
                                </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_pelanggan WHERE substr(tgl_masuk,1,4)='$ambilthn'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['id_pelanggan'] ?></td>
                                                      <td><?= $data['nama'] ?></td>
                                                      <td><?= $data['alamat'] ?></td>
                                                      <td><?= $data['no_ktp'] ?></td>
                                    <td><?= $data['produk_layanan'] ?></td>
                                    <td><?= $data['peruntunan'] ?></td>
                                    <td><?= $data['tarif'] ?> / <?= $data['daya'] ?></td>
                                                      <td><?= $data['tgl_masuk'] ?></td>
									                  <td><?= $data['bulan_pemakaian'] ?><?= $data['tahun'] ?></td>
									                  <td><?= $data['status'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="12" class="text-right">
                                        Aek Kanopan,  &nbsp <?= date("d-m-Y") ?>
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
