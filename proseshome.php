<?php

$name = $_POST["nama"];
$kelas = $_POST["class"];
$no = $_POST["nonis"];
$jk = $_POST["jenis_kelamin"];
$tempat = $_POST["lahir"];
$tanggal = $_POST["tgllahir"];
$alamat = $_POST["alam"];
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path = "gambar/".$nama_file;
move_uploaded_file($tmp_file, 'gambar/'.$nama_file);
include 'koneksi.php';
$SQL = "INSERT INTO `data`(`id_siswa`,`nama_siswa`, `kelas`, `no_nisn`, `jk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `img`) VALUES ('','$name','$kelas','$no','$jk','$tempat','$tanggal','$alamat','$nama_file')";
$hasil = mysqli_query($koneksi,$SQL);
header('location:home.php')


?>