<?php
include "koneksi.php";
$kode = $_GET['id_siswa'];

$hapus = mysqli_query($koneksi,"DELETE FROM data WHERE id_siswa='$kode'");
if($hapus){
    echo "<script>alert('data berhasil di hapus')</script>";
    header("refresh:0;edit.php");
}else{
    echo "<script>alert('data tidak terhapus')</script>";
    header("refresh:0;edit.php");
}
?>