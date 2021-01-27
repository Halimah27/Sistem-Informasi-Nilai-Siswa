<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><img src="img/Tut-Wuri-Handayani.png" width="2%">Form Tambah Nilai Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan tanggal" required>
                            </div>
                        </div>

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
                            <label for="Kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-3 col-xs-9">
                                <select name="Kelas" class="form-control">
                                    <option value="">- Pilih Kelas -</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Mata_Pelajaran" class="col-sm-3 control-label">Mata Pelajaran</label>
                            <div class="col-sm-6">
                                <input type="text" name="Mata_Pelajaran" class="form-control" id="inputEmail3" placeholder="Inputkan Mata Pelajaran" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="Tugas1" class="col-sm-3 control-label">Tugas 1</label>
                            <div class="col-sm-3">
                                <input type="text" name="Tugas1" class="form-control" id="inputEmail3" placeholder="Inputkan Tugas 1" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="Tugas2" class="col-sm-3 control-label">Tugas 2</label>
                            <div class="col-sm-3">
                                <input type="text" name="Tugas2" class="form-control" id="inputEmail3" placeholder="Inputkan Tugas 2" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="UTS" class="col-sm-3 control-label">UTS</label>
                            <div class="col-sm-3">
                                <input type="text" name="UTS" class="form-control" id="inputEmail3" placeholder="Inputkan UTS" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="UAS" class="col-sm-3 control-label">UAS</label>
                            <div class="col-sm-3">
                                <input type="text" name="UAS" class="form-control" id="inputEmail3" placeholder="Inputkan UAS" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Perilaku" class="col-sm-3 control-label">Perilaku & Kepribadian</label>
                            <div class="col-sm-6">
                                <input type="text" name="Perilaku" class="form-control" id="inputEmail3" placeholder="Inputkan Perilaku & Kepribadian" required>
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
  $tanggal=$_POST['tanggal'];
  $NISN=$_POST['NISN'];
  $Nama_Siswa=$_POST['Nama_Siswa'];
  $Kelas=$_POST['Kelas'];
  $Mata_Pelajaran=$_POST['Mata_Pelajaran'];
  $Tugas1=$_POST['Tugas1'];
  $Tugas2=$_POST['Tugas2'];
  $UTS=$_POST['UTS'];
  $UAS=$_POST['UAS'];
  $Total_Nilai=$_POST['Total_Nilai'];
  $Perilaku=$_POST['Perilaku'];

    //buat sql
    $sql="INSERT INTO tbl_nilaisiswa VALUES ('$tanggal','$NISN','$Nama_Siswa','$Kelas','$Mata_Pelajaran','$Tugas1','$Tugas2','$UTS','$UAS','$Total_Nilai','$Perilaku')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=nilai&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
