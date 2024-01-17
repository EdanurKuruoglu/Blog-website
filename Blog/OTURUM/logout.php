<?php
ob_start();
session_start();
unset($_SESSION["kullaniciAdi"]);
session_unset();
$_SESSION=array();
session_destroy();
header("location:login.php");



?>
