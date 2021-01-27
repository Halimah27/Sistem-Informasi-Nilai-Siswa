<?php
//membuat query untuk hapus data
$sql="DELETE FROM tbl_datasiswa WHERE NISN ='".$_GET['NISN']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=datasiswa&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=datasiswa&actions=tampil');</script>";
}
