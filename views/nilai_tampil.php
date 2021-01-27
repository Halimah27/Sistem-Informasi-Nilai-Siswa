<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"></span><img src="img/Tut-Wuri-Handayani.png" width="2%"> Nilai Siswa SD XYZ</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Mata Pelajaran</th>
                                <th>Tugas 1</th>
                                <th>Tugas 2</th>
                                <th>UTS</th>
                                <th>UAS</th>
                                <th>Total Nilai</th>
                                <th>Perilaku</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_nilaisiswa";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor

                                $ntugas1 = $data['Tugas1'];
                                $ntugas2 = $data['Tugas2'];
                                $nuts = $data['UTS'];
                                $nuas = $data['UAS'];

                                $ntotal = (0.4*$nuas)+(0.3*$nuts)+(0.15*$ntugas1)+(0.15*$ntugas2);
                                            ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['NISN'] ?></td>
                                    <td><?= $data['Nama_Siswa'] ?></td>
                                    <td><?= $data['Kelas'] ?></td>
                                    <td><?= $data['Mata_Pelajaran'] ?></td>
                                    <td><?= $data['Tugas1'] ?></td>
                                    <td><?= $data['Tugas2'] ?></td>
                                    <td><?= $data['UTS'] ?></td>
                                    <td><?= $data['UAS'] ?></td>
                                    <td><?= $ntotal ?></td>
                                    <td><?= $data['Perilaku'] ?></td>
                                    <td>
                                        <a href="?page=nilai&actions=detail&NISN=<?= $data['NISN'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=nilai&actions=edit&NISN=<?= $data['NISN'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="?page=nilai&actions=delete&NISN=<?= $data['NISN'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=nilai&actions=tambah" class="btn btn-warning btn-sm">
                                        Tambah Data

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

