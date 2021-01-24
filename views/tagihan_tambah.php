<?php
$ambil=  mysqli_query($koneksi, "SELECT * FROM tagihan WHERE id =''") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-9">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Tagihan Listrik</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="idpel" class="col-sm-3 control-label">IDPEL</label>
                            <div class="col-sm-6">
								<input type="text" name="idpel" class="form-control" id="inputEmail3" placeholder="ID Pelanggan">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="nama_pel" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-6">
                                <input type="text" name="nama_pel" class="form-control" id="inputEmail3" placeholder="Nama Pelnggan" >
                            </div>
                        </div>

                        <!--Bulan Pemakaian-->

                        <div class="form-group">
                            <label for="periode" class="col-sm-3 control-label">Periode</label>
                            <div class="col-sm-3 col-xs-9">
							<select name="periode" class="form-control">
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
                            <div for="tahun" class="col-sm-3 col-xs-9">
								<select name="tahun_per" class="form-control">
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

                        <div class="form-group">
                            <label for="tgl_bayar" class="col-sm-3 control-label">Tanggal Bayar</label>
                            <div class="col-sm-6">
                                <input type="date" name="tgl_bayar" class="form-control" id="inputEmail3" placeholder="Tanggal Bayar">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rp_admin" class="col-sm-3 control-label">Rp Admin</label>
                            <div class="col-sm-6">
                                <input type="number" name="rp_admin" value="3000" class="form-control" id="inputEmail3" placeholder="Rp Admin">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rp_tagihan" class="col-sm-3 control-label">Rp Tagihan</label>
                            <div class="col-sm-6">
                                <input type="number" name="rp_tagihan" class="form-control" id="inputEmail3" placeholder="Rp Tagihan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Tagihan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=tagihan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Tagihan Listrik
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $idpel=$_POST['idpel'];
    $nama_pel=$_POST['nama_pel'];
    $periode=$_POST['periode'];
    $tahun_per=$_POST['tahun_per'];
    $tgl_bayar=$_POST['tgl_bayar'];
	$rp_admin=$_POST['rp_admin'];
    $rp_tagihan=$_POST['rp_tagihan'];
    $rp_bayar = $rp_admin + $rp_tagihan;
   
    //buat sql
    $sql="INSERT INTO tagihan VALUES ('$idpel','$nama_pel','$periode','$tahun_per',
    '$tgl_bayar','$rp_admin','$rp_tagihan','$rp_bayar','')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=tagihan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
