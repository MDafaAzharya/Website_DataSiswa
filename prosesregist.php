<?php
include 'koneksi.php';

$username = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['pass'];
$simpan = md5($password);
$role = $_POST['role'];

$sql = "INSERT INTO `user`(`id_user`, `username`, `email`, `password`, `role`) VALUES ('','$username','$email','$simpan','$role')";
$hasil = mysqli_query($koneksi, $sql);

session_start();
echo "<script>
alert ('Daftar berhasil')
document.location.href = 'login.php';
</script>";
?>


