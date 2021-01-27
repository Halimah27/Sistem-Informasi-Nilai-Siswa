<?php
$NISN=$_GET['NISN'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_nilaisiswa WHERE NISN='$NISN'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><img src="img/Tut-Wuri-Handayani.png" width="2%"> Update Nilai Siswa SD XYZ</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl" value="<?=$data['tanggal']?>"class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="NISN" class="col-sm-3 control-label">NISN</label>
                             <div class="col-sm-3">
                                <input type="text" name="NISN" value="<?=$data['NISN']?>"class="form-control" id="inputEmail3" placeholder="NISN" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Nama_Siswa" class="col-sm-3 control-label">Nama Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama_Siswa" value="<?=$data['Nama_Siswa']?>"class="form-control" id="inputEmail3" placeholder="Nama Siswa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-3 col-xs-9">
                                <select name="Kelas" class="form-control">
                                    <option value="<?=$data['Kelas']?>" ><?=$data['Kelas']?></option>
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
                                <input type="text" name="Mata_Pelajaran" value="<?=$data['Mata_Pelajaran']?>"class="form-control" id="inputEmail3" placeholder="Mata Pelajaran">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Tugas1" class="col-sm-3 control-label">Tugas 1</label>
                            <div class="col-sm-3">
                                <input type="text" name="Tugas1" value="<?=$data['Tugas1']?>"class="form-control" id="inputEmail3" placeholder="Tugas 1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Tugas2" class="col-sm-3 control-label">Tugas 2</label>
                             <div class="col-sm-3">
                                <input type="text" name="Tugas2" value="<?=$data['Tugas2']?>"class="form-control" id="inputEmail3" placeholder="Tugas 2" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="UTS" class="col-sm-3 control-label">UTS</label>
                            <div class="col-sm-3">
                                <input type="text" name="UTS" value="<?=$data['UTS']?>"class="form-control" id="inputEmail3" placeholder="UTS">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="UAS" class="col-sm-3 control-label">UAS</label>
                             <div class="col-sm-3">
                                <input type="text" name="UAS" value="<?=$data['UAS']?>"class="form-control" id="inputEmail3" placeholder="UAS" >
                            </div>
                        </div>
                       <div class="form-group">
                            <label for="Perilaku" class="col-sm-3 control-label">Perilaku & Kepribadian</label>
                             <div class="col-sm-6">
                                <input type="text" name="Perilaku" value="<?=$data['Perilaku']?>"class="form-control" id="inputEmail3" placeholder="Perilaku" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-warning">
                                    <span class="fa fa-edit"></span> Update Nilai Siswa</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="panel-footer">
                    <a href="?page=nilai&actions=tampil" class="btn btn-info btn-sm">
                        Kembali Ke Nilai Siswa
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
	$tanggal=$_POST['tgl'];
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
    $sql="UPDATE tbl_nilaisiswa SET tanggal = '$tanggal', NISN = '$NISN', Nama_Siswa='$Nama_Siswa', Kelas='$Kelas', Mata_Pelajaran='$Mata_Pelajaran', Tugas1='$Tugas1', Tugas2='$Tugas2', UTS='$UTS', UAS='$UAS', Perilaku='$Perilaku' WHERE NISN='$NISN'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=nilai&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



