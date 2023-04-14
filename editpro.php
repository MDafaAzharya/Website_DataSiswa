<?php
include "koneksi.php";
$kode = $_POST['id'];

$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path = "gambar/".$nama_file;
move_uploaded_file($tmp_file, 'gambar/'.$nama_file);
if(isset($_POST['proses'])){
mysqli_query($koneksi, "UPDATE `data` SET `nama_siswa`='$_POST[nama]',`kelas`='$_POST[class]',`no_nisn`='$_POST[nonis]',`jk`='$_POST[jk]',`tempat_lahir`='$_POST[place]',`tgl_lahir`='$_POST[tgllahir]',`alamat`='$_POST[alam]',`img`='$nama_file' WHERE id_siswa = '$kode'");
}

?>

<html>

<head>
    <style>
        body {
            font-family: sans-serif;
            margin-top: 450px;
        }
    </style>
</head>

<body align="center">
    <?php echo "<h1> Data Berhasil Diubah!  <br> <a href='edit.php'> Lihat Data </a> </h1>"; ?>
</body>

</html>