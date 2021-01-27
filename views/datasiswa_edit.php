<?php
$NISN=$_GET['NISN'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_datasiswa WHERE NISN ='$NISN'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><img src="img/Tut-Wuri-Handayani.png" width="2%"> Update Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="NISN" class="col-sm-3 control-label">NISN</label>
                            <div class="col-sm-3">
                                <input type="text" name="NISN" value="<?=$data['NISN']?>"class="form-control" id="inputEmail3" placeholder="NISN" readonly="TRUE">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Nama_Siswa" class="col-sm-3 control-label">Nama Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama_Siswa" value="<?=$data['Nama_Siswa']?>"class="form-control" id="inputEmail3" placeholder="Nama Siswa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" value="<?=$data['tempat_lahir']?>"class="form-control" id="inputEmail3" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_lahir" value="<?=$data['tgl_lahir']?>"class="form-control" id="inputEmail3" >
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-3 col-xs-9">
                                <select name="agama" class="form-control">
                                    <option value=""><?=$data['agama']?></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-3 col-xs-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value=""><?=$data['jenis_kelamin']?></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="orangtua_siswa" class="col-sm-3 control-label">Orang Tua/Wali Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="orangtua_siswa" value="<?=$data['orangtua_siswa']?>"class="form-control" id="inputEmail3" placeholder="Orang Tua/Wali Siswa">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="Tgl_masuk" value="<?=$data['Tgl_masuk']?>"class="form-control" id="inputEmail3" >
                            </div>
                        </div>
                                
                        <!--Status-->
                    
                
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-warning">
                                    <span class=""></span> Update Data </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=nilai&actions=tampil" class="btn btn-info btn-sm">
                        Kembali 
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
  $NISN=$_POST['NISN'];
  $Nama_Siswa=$_POST['Nama_Siswa'];
  $tempat_lahir=$_POST['tempat_lahir'];
  $tgl_lahir=$_POST['tgl_lahir'];
  $agama=$_POST['agama'];
  $alamat=$_POST['alamat'];
  $jenis_kelamin=$_POST['jenis_kelamin'];
  $orangtua_siswa=$_POST['orangtua_siswa'];
  $Tgl_masuk=$_POST['Tgl_masuk'];

    //buat sql
    $sql="UPDATE tbl_datasiswa SET NISN='$NISN',Nama_Siswa='$Nama_Siswa',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',agama='$agama',alamat='$alamat',jenis_kelamin='$jenis_kelamin',orangtua_siswa='$orangtua_siswa',Tgl_masuk='$Tgl_masuk' WHERE NISN ='$NISN'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=datasiswa&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



