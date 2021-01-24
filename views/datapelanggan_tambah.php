<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pelanggan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
						 <div class="form-group">
                            <label for="id_pelanggan" class="col-sm-3 control-label">ID Pelanggan</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_pelanggan" class="form-control" id="inputEmail3" placeholder="Inputkan ID Pelanggan" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Pelanggan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pelanggan" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan alamat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="identitas" class="col-sm-3 control-label">No KTP</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_ktp" class="form-control" id="inputEmail3" placeholder="Inputkan Identitas" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="produk_layanan" class="col-sm-3 control-label">Produk Layanan</label>
                               <div class="col-sm-9 col-xs-9">
                                <select name="produk_layanan" class="form-control">
                                    <option value="PASCABAYA (POSTPAID)">PASCABAYAR (POSTPAID)</option>
                                    <option value="PRABAYAR (PREPAID)">PRABAYAR (PREPAID)</option>
                                </select>
                            </div>
                        </div>

                        <!--Peruntunan-->

                        <div class="form-group">
                            <label for="peruntunan" class="col-sm-3 control-label">Peruntunan</label>
                            <div class="col-sm-9 col-xs-9">
								<select name="peruntunan" class="form-control">
									<option value="Rumah Tangga">Rumah Tangga</option>
									<option value="Perusahaan">Perusahaan</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Peruntunan-->

                        <div class="form-group">
                            <label for="tarif" class="col-sm-3 control-label">Tarif</label>
                            <div class="col-sm-9">
                                <input type="text" name="tarif" class="form-control" id="inputEmail3" placeholder="Inputkan Tarif" required>
                            </div>
                        </div>

                         <!--Daya-->

                         <div class="form-group">
                            <label for="daya" class="col-sm-3 control-label">Daya</label>
                            <div class="col-sm-9 col-xs-9">
								<select name="daya" class="form-control">
									<option value="450">450</option>
									<option value="900">900</option>
                                    <option value="1300">1300</option>
                                    <option value="2200">2200</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Daya-->

                        <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>

                        <!--Bulan Pemakaian-->

                        <div class="form-group">
                            <label for="bulan_pemakaian" class="col-sm-3 control-label">Periode</label>
                            <div class="col-sm-2 col-xs-9">
							<select name="bulan_pemakaian" class="form-control">
                                <option value="Desember"> Desember </option>
                                <option value="November"> November </option>
                                <option value="Oktober"> Oktober </option>
                                <option value="September"> September </option>
                                <option value="Agustus"> Agustus </option>
                                <option value="Juli"> Juli </option>
                                <option value="Juni"> Juni </option>
                                <option value="Mei"> Mei </option>
                                <option value="April"> April </option>
                                <option value="Maret"> Maret </option>
                                <option value="Februari"> Februari </option>
                                <option value="Januari"> Januari </option>
							</select>
                            </div>
                            <div for="tahun" class="col-sm-2 col-xs-9">
								<select name="tahun" class="form-control">
									<option value="2015">2015</option>
									<option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Bulan Pemakaian-->

                        <!--Status-->

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="AKTIF">AKTIF</option>
									<option value="TIDAK AKTIF">TIDAK AKTIF</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=datapelanggan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pelanggan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $id_pelanggan=$_POST['id_pelanggan'];
  $nama=$_POST['nama'];
  $alamat=$_POST['alamat'];
  $no_ktp=$_POST['no_ktp'];
  $produk_layanan=$_POST['produk_layanan'];
  $peruntunan=$_POST['peruntunan'];
  $tarif=$_POST['tarif'];
  $daya=$_POST['daya'];
  $tgl_masuk=$_POST['tgl_masuk'];
  $bulan_pemakaian=$_POST['bulan_pemakaian'];
  $tahun=$_POST['tahun'];
  $status=$_POST['status'];
	
    //buat sql
    $sql="INSERT INTO tb_pelanggan VALUES ('','$id_pelanggan','$nama','$alamat','$no_ktp','$produk_layanan',
    '$peruntunan','$tarif','$daya','$tgl_masuk','$bulan_pemakaian','$tahun','$status')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan data Error");
    if ($query){
        echo "<script>window.location.assign('?page=datapelanggan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
