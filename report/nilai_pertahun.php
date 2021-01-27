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
                    <h3>Sistem Informasi Nilai Siswa </h3>
                        <h5>Jalan Lintas No.123 ABCD, Kabupaten A, Provinsi B, 12345</h5>
                        <hr>
                        <h3>NILAI SISWA SD XYZ TAHUN <? echo "$ambilthn"; ?></h3> <br>  
                        <table class="table  table-striped table-hover">
                        <tbody>
                        <thead>
                            <tr class="table-bordered">
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">NISN</th>
                                <th class="text-center">Nama Siswa</th>
                                <th class="text-center">Kelas</th>
                                <th class="text-center">Mata Pelajaran</th>
                                <th class="text-center">Tugas 1</th>
                                <th class="text-center">Tugas 2</th>                                
                                <th class="text-center">UTS</th>
                                <th class="text-center">UAS</th>
                                <th class="text-center">Total Nilai</th>
                                <th class="text-center">Perilaku</th>
                            </tr>
                                </thead>
                            <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_nilaisiswa WHERE year(tanggal)='$ambilthn'";
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
                                    <td><?= $data['tanggal'] ?></td>
                                    <td><?= $data['NISN'] ?></td>
                                    <td><?= $data['Nama_Siswa'] ?></td>
                                    <td><?= $data['Kelas'] ?></td>
                                    <td><?= $data['Mata_Pelajaran'] ?></td>
                                    <td><?= $data['Tugas1'] ?></td>
                                    <td><?= $data['Tugas2'] ?></td>
                                    <td><?= $data['UTS'] ?></td>
                                    <td><?= $data['UAS'] ?></td>
                                    <td><?= $data['Total_Nilai'] ?></td>
                                    <td><?= $data['Perilaku'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                            </tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                              <td colspan="12" class="text-right"><br>
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
