
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><img src="img/Tut-Wuri-Handayani.png" width="2%"> Informasi Detail Nilai Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_nilaisiswa WHERE NISN ='" . $_GET ['NISN'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);

                    $ntugas1 = $data['Tugas1'];
                    $ntugas2 = $data['Tugas2'];
                    $nuts = $data['UTS'];
                    $nuas = $data['UAS'];

                    $ntotal = (0.4*$nuas)+(0.3*$nuts)+(0.15*$ntugas1)+(0.15*$ntugas2);


                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>Tanggal</td> <td><?= $data['tanggal'] ?></td>
                        </tr>
                        <tr>
                            <td>NISN</td> <td><?= $data['NISN'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Siswa</td> <td><?= $data['Nama_Siswa'] ?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td> <td><?= $data['Kelas'] ?></td>
                        </tr>
                        <tr>
                            <td>Mata Pelajaran</td> <td><?= $data['Mata_Pelajaran'] ?></td>
                        </tr>
                        <tr>
                            <td>Tugas 1</td> <td><?= $data['Tugas1'] ?></td>
                        </tr>
                        <tr>
                            <td>Tugas 2</td> <td><?= $data['Tugas2'] ?></td>
                        </tr>
                        <tr>
                            <td>UTS</td> <td><?= $data['UTS'] ?></td>
                        </tr>
                        <tr>
                            <td>UAS</td> <td><?= $data['UAS'] ?></td>
                        </tr>
                        <tr>
                            <td>Total Nilai</td> <td><?= $ntotal ?></td>
                        </tr>
                    </table>
                
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=nilai&actions=tampil" class="btn btn-warning btn-sm">
                        Kembali ke Nilai Siswa </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

