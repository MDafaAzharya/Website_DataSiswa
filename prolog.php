<?php

session_start();
echo "<script>
alert('Password atau Username Salah!!!');
document.location.href = 'login.php';
</script>";

include 'koneksi.php';
$username = $_POST['nama'];
$password = $_POST['pass'];
$simpan = md5($password);
$login = mysqli_query($koneksi,"SELECT * FROM user where username='$username' and password='$simpan'");
	$data = mysqli_fetch_assoc($login);
    // Admin
  if($data['role']=="admin"){
	$_SESSION['username'] = $username;
	$_SESSION['role'] = "admin";
	header("location:dashboard.php");
 
}

?>
