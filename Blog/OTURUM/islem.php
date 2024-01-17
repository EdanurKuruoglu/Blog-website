<?php
ob_start();
session_start();
require_once("../function.php");

$adi=$_POST["makale_adi"];
$icerik=$_POST["makale_icerik"];
$aktif=$_POST["makale_aktif"];

$baglanti = baglan();
$sorgu = "INSERT INTO editor (makale_adi,makale_icerik,makale_aktif) VALUES ('$adi','$icerik',$aktif)";
echo $sorgu;
$sonuc = mysqli_query($baglanti,$sorgu);

if($sonuc){
        header("location:sayfa.php");
}
else{
        echo $sorgu;
} 
?>