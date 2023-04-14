<?php 
 
session_start();
$_SESSION["username"];
$_SESSION["password"];

unset($_SESSION["username"]);
unset($_SESSION["password"]);

session_unset();
session_destroy();
 
echo"<script> window.alert('Berhasil Logout')
    window.location='login.php'</script>"
 
?>