<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><img src="img/Tut-Wuri-Handayani.png" width="2%"> Form Tambah Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="NISN" class="col-sm-3 control-label">NISN</label>
                            <div class="col-sm-3">
                                <input type="text" name="NISN" class="form-control" id="inputEmail3" placeholder="Inputkan NISN" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="Nama_Siswa" class="col-sm-3 control-label">Nama Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama_Siswa" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Siswa" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" class="form-control" id="inputEmail3" placeholder="Inputkan Tempat Lahir" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_lahir" class="form-control" id="inputEmail3" placeholder="Inputkan Tempat Lahir" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-3 col-xs-9">
                                <select name="agama" class="form-control">
                                    <option value="">- Pilih Agama -</option>
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
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-3 col-xs-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="">- Jenis Kelamin -</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="orangtua_siswa" class="col-sm-3 control-label">Nama Orangtua/Wali Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="orangtua_siswa" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Orangtua/Wali Siswa" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="Tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="Tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-warning">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <a href="?page=datasiswa&actions=tampil" class="btn btn-info btn-sm">
                        Kembali Ke Data Siswa
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
    $sql="INSERT INTO tbl_datasiswa VALUES ('$NISN','$Nama_Siswa','$tempat_lahir','$tgl_lahir','$agama',
    '$alamat','$jenis_kelamin','$orangtua_siswa','$Tgl_masuk')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=datasiswa&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
