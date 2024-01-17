<?php
ob_start();
session_start();
if(isset($_SESSION["kullaniciAdi"])){
       echo '
        <h1> ANASAYFAYA HOŞGELDİNİZ! </h1>
        <a href="sayfa.php">SAYFA</a><br>
        <a href="logout.php">ÇIKIŞ</a>
       ';
}
else{

       header("location:login.php");
}

?>
