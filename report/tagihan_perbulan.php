<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Tagihan Listrik Perbulan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilbln=$_POST['bulan'];
        $ambilthn=$_POST['tahun'];
        $bulanNama;
        if ($ambilbln==12) {
          $bulanNama="DESEMBER";
        } elseif ($ambilbln==11) {
          $bulanNama="NOVEMBER";
        } elseif ($ambilbln==10) {
          $bulanNama="OKTOBER";
        } elseif ($ambilbln==9) {
          $bulanNama="SEPTEMBER";
        } elseif ($ambilbln==8) {
          $bulanNama="AGUSTUS";
        } elseif ($ambilbln==7) {
          $bulanNama="JULI";
        } elseif ($ambilbln==6) {
          $bulanNama="JUNI";
        } elseif ($ambilbln==5) {
          $bulanNama="MEI";
        } elseif ($ambilbln==4) {
          $bulanNama="APRIL";
        } elseif ($ambilbln==3) {
          $bulanNama="MARET";
        } elseif ($ambilbln==2) {
          $bulanNama="FEBRUARI";
        } elseif ($ambilbln==1) {
          $bulanNama="JANUARI";
        }

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Tagihan Listrik Pascabayar </h2>
                        <h4>East Aek Kanopan, Kualu Hulu, Labuhan Batu Utara <br> Kabupaten Labuhanbatu Utara, Sumatera Utara, 21457</h4>
                        <hr>
                        <h3>DATA TAGIHAN LISTRIK PERBULAN   <? echo "$bulanNama $ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
                      <th>No.</th><th width="17%"><center>IDPEL</center></th><th><center>Nama</center></th><th width="10%"><center>Periode</center></th><th width="14%"><center>Tanggal Bayar</center></th>
                      <th width="17%"><center>Rp Admin</center></th><th width="17%"><center>Rp Tagihan</center></th><th width="17%"><center>Rp Bayar</center></th>
                </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tagihan WHERE substr(tgl_bayar,1,7)='$ambilthn-$ambilbln'";
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
									                  <td><?= $data['idpel'] ?></td>
									                  <td><?= $data['nama_pel'] ?></td>
                                    <td><?= $data['periode'] ?>-<?= $data['tahun_per'] ?></td>
                                    <td><?= $data['tgl_bayar'] ?></td>
                                    <td><b><?php echo "Rp. " . number_format($data['rp_admin'], 2, ",", "."); ?></b></td>
                                    <td><b><?php echo "Rp. " . number_format($data['rp_tagihan'] , 2, ",", "."); ?></b></td>
                                    <td><b><?php echo "Rp. " . number_format( $data['rp_bayar'], 2, ",", "."); ?></b></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        Aek kanopan,  &nbsp <?= date("d-m-Y") ?>
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
