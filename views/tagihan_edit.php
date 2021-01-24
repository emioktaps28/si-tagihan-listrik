<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tagihan WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Tagihan Listrik</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="idpel" class="col-sm-3 control-label">IDPEL</label>
                             <div class="col-sm-9">
								<input type="text" name="idpel" value="<?=$data['idpel']?> " class="form-control" id="inputEmail3" placeholder="ID PELANGGAN" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_pel" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pel" value="<?=$data['nama_pel']?>" class="form-control" id="inputEmail3" placeholder="Nama Pelanggan">
                            </div>
                        </div>

                        <!--Bulan Pemakaian-->

                <div class="form-group">
                            <label for="periode" class="col-sm-3 control-label">Periode</label>
                            <div class="col-sm-2 col-xs-9">
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
                            <div for="tahun" class="col-sm-2 col-xs-9">
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
						
						<!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Bayar</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2021;$i>2000;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal--> 
						
                        <div class="form-group">
                            <label for="rp_admin" class="col-sm-3 control-label">Rp Admin</label>
                            <div class="col-sm-9">
                                <input type="number" name="rp_admin" value="3000" class="form-control" id="inputEmail3" placeholder="Rp Admin">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="rp_tagihan" class="col-sm-3 control-label">Rp Tagihan</label>
                            <div class="col-sm-9">
                                <input type="text" name="rp_tagihan" value="<?php echo $data['rp_tagihan']; ?>" class="form-control" id="inputPassword3" placeholder="Rp Tagihan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rp_bayar" class="col-sm-3 control-label">Rp Bayar</label>
                            <div class="col-sm-9">
                                <input type="text" name="rp_bayar" value="<?php echo $data['rp_bayar']; ?>" class="form-control" id="inputPassword3" placeholder="Rp Bayar">
                            </div>
                        </div>

                        <div class="col-sm-offset-3" style="margin-top:10px;">
						    <button type="submit" class="btn btn-success"> Hitung </button>
						    <button type="reset" class="btn btn-danger"> Batal</button>
					    </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Tagihan</button>
                            </div>
                        </div>

                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=tagihan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Tagihan Listrik
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
    $tgl_bayar=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
    $rp_admin=$_POST['rp_admin'];
	$rp_tagihan=$_POST['rp_tagihan'];
    $rp_bayar = $rp_admin + $rp_tagihan;
    
    //buat sql
    $sql="UPDATE tagihan SET    idpel   ='$idpel',
                                nama_pel='$nama_pel',
                                periode ='$periode',
                                tahun_per='$tahun_per',
                                tgl_bayar='$tgl_bayar',
                                rp_tagihan='$rp_tagihan',
                                rp_bayar='$rp_bayar' 
                        WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=tagihan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



