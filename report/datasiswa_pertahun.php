<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Siswa Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                    <h2>Sistem Informasi Data Siswa </h2>
                        <h4>Jalan Lintas No.123 ABCD, Kabupaten A, Provinsi B, 12345</h4>
                        <hr>
                        <h3>DATA SISWA SD XYZ TAHUN <? echo "$ambilthn"; ?></h3> <br>  
                        <table class="table  table-striped table-hover">
                        <tbody>
                        <thead>
                            <tr class="table-bordered">
                                <th class="text-center">NISN</th>
                                <th class="text-center">Nama Siswa</th>
                                <th class="text-center">Tempat Lahir</th>
                                <th class="text-center">Tanggal Lahir</th>
                                <th class="text-center">Agama</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Orangtua/Wali Siswa</th>
                                <th class="text-center">Tanggal Masuk</th>
                            </tr>
                                </thead>
                            <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_datasiswa WHERE year(Tgl_masuk)='$ambilthn'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                <tr class="table-bordered">
                                    <td><?= $data['NISN'] ?></td>
                                    <td class="text-left"><?= $data['Nama_Siswa'] ?></td>
                                    <td class="text-left"><?= $data['tempat_lahir'] ?></td>
                                    <td><?= $data['tgl_lahir'] ?></td>
                                    <td><?= $data['agama'] ?></td>
                                    <td class="text-left"><?= $data['alamat'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?></td>
                                    <td class="text-left"><?= $data['orangtua_siswa'] ?></td>
                                    <td><?= $data['Tgl_masuk'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                            </tbody>
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
