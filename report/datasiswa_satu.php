<link rel="shortcut icon" href="img/Tut-Wuri-Handayani.png">
<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Siswa</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_datasiswa WHERE NISN='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                       <h3>Sistem Informasi Data Siswa </h3>
                        <h5>Jalan Lintas No.123 ABCD, Kabupaten A, Provinsi B, 12345</h5>
                        <hr>
                        <h3>DATA SISWA SD XYZ</h3> <br>
                        <table class="table  table-striped table-hover"> 
                            <tbody>
                                 <tr class="table-bordered ">
                                    <td >NISN</td> <td><?= $data['NISN'] ?></td>
                                </tr>
                                <tr class="table-bordered ">
                                    <td>Nama Siswa</td> <td><?= $data['Nama_Siswa'] ?></td>
                                </tr>
                                <tr class="table-bordered ">
                                    <td>Tempat Lahir</td> <td><?= $data['tempat_lahir'] ?></td>
                                </tr>
                                <tr class="table-bordered ">
                                    <td>Tanggal Lahir</td> <td><?= $data['tgl_lahir'] ?></td>
                                </tr>
                                <tr class="table-bordered ">
                                    <td>Agama</td> <td><?= $data['agama'] ?></td>
                                </tr>
                                <tr class="table-bordered ">
                                    <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                                </tr>
                                <tr class="table-bordered ">
                                    <td>Jenis Kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                                </tr>
                                <tr class="table-bordered ">
                                    <td>Orangtua/Wali Siswa</td> <td><?= $data['orangtua_siswa'] ?></td>
                                </tr>
                                <tr class="table-bordered ">
                                    <td>Tanggal Masuk</td> <td><?= $data['Tgl_masuk'] ?></td>
                                </tr>

                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="10" class="text-right"><br>
                                        ABCD  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kepala Sekolah, M.Pd<strong></u><br>
                                        NIP.1234567890123
                                    </td>
                                </tr>
                            </tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>