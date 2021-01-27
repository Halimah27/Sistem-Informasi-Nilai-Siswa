<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><img src="img/Tut-Wuri-Handayani.png" width="2%">  Laporan Nilai Siswa SD XYZ</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal</th>
                                <th width="17%">NISN</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Mata Pelajaran</th>
                                <th>UTS</th>
                                <th>UAS</th>
                                <th>Tugas 1</th>
                                <th>Tugas 2</th>
                                <th>Total Nilai</th>
                                <th>Perilaku & Kepribadian</th>
                                <th>Print</th>
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
                                $ntugas1 = $data['Tugas1'];
                                $ntugas2 = $data['Tugas2'];
                                $nuts = $data['UTS'];
                                $nuas = $data['UAS'];

                                $ntotal = (0.4*$nuas)+(0.3*$nuts)+(0.15*$ntugas1)+(0.15*$ntugas2);
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['tanggal'] ?></td>
                                    <td><?= $data['NISN'] ?></td>
                                    <td><?= $data['Nama_Siswa'] ?></td>
                                    <td><?= $data['Kelas'] ?></td>
                                    <td><?= $data['Mata_Pelajaran'] ?></td>
                                    <td><?= $data['Tugas1'] ?> </td>
                                    <td><?= $data['Tugas2'] ?> </td>
                                    <td><?= $data['UTS'] ?> </td>
                                    <td><?= $data['UAS'] ?> </td>
                                    <td><?= $ntotal ?></td>
                                    <td><?= $data['Perilaku'] ?> </td>
                                    <td>
                                    <a href="report/nilai_satu.php?id=<?= $data['NISN'] ?>" target="_blank" class="btn btn-warning btn-xs">
                                    <span class="fa fa-print"></span>
                                    </a>

                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="9">
                                    <a href="report/nilai_semua.php" target="_blank" class="btn btn-success btn-sm">
                                        <span class="fa fa_print"></span> Cetak Semua Data

                                    </a>
                                    <a href="#cetak_perbulan" class="btn btn-success btn-sm">
                                        <span class="fa fa_print"></span> Cetak Perbulan
                                    </a>
                                    <a href="#cetak_pertahun" class="btn btn-success btn-sm">
                                        <span class="fa fa_print"></span> Cetak Pertahun
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

<div id="cetak_perbulan" class="modalDialog">
    <div>
        <a href="#" title="Close" class="close">X</a>

        <form  target="_blank" action="report/nilai_perbulan.php" method="post">
        <h4>Pilih bulan </h4>
        <select name="bulan" class="form-control">
          <option value="12"> Desember </option>
          <option value="11"> November </option>
          <option value="10"> Oktober </option>
          <option value="09"> September </option>
          <option value="08"> Agustus </option>
          <option value="07"> Juli </option>
          <option value="06"> Juni </option>
          <option value="05"> Mei </option>
          <option value="04"> April </option>
          <option value="03"> Maret </option>
          <option value="02"> Februari </option>
          <option value="01"> Januari </option>
        </select>
        <h4>Pilih tahun</h4>
        <select name="tahun" class="form-control">
          <?php
            for ($i=substr(date("d-m-Y"),6,4); $i > substr(date("d-m-Y"),6,4)-20; $i--) { ?>
              <option value="<?=$i?>"> <?=$i?> </option>
          <?php  }
          ?>
        </select>

        <button type="submit">OK</button>
        </form>
    </div>
</div>

<div id="cetak_pertahun" class="modalDialog">
    <div>
        <a href="#" title="Close" class="close">X</a>

        <form  target="_blank" action="report/nilai_pertahun.php" method="post">
        <h4>Pilih tahun</h4>
        <select name="tahun" class="form-control">
          <?php
            for ($i=substr(date("d-m-Y"),6,4); $i > substr(date("d-m-Y"),6,4)-20; $i--) { ?>
              <option value="<?=$i?>"> <?=$i?> </option>
          <?php  }
          ?>
        </select>

        <button type="submit">OK</button>
        </form>
    </div>
</div>


