<?php 
session_start();
unset($_SESSION['back_user']);
header("location:backLogin.php");
?>
