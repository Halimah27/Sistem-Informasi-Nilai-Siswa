
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><img src="img/Tut-Wuri-Handayani.png" width="2%"> Informasi Detail Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_datasiswa WHERE NISN ='" . $_GET ['NISN'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>NISN</td> <td><?= $data['NISN'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Siswa</td> <td><?= $data['Nama_Siswa'] ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td> <td><?= $data['tempat_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td> <td><?= $data['tgl_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td> <td><?= $data['agama'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Orang Tua/Wali</td> <td><?= $data['orangtua_siswa'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Masuk</td> <td><?= $data['Tgl_masuk'] ?></td>
                        </tr>
                    </table>
                
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=datasiswa&actions=tampil" class="btn btn-warning btn-sm">
                        Kembali ke Data Siswa </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

