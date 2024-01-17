<?php 
$baglanti = mysqli_connect("localhost","root","","vt");

// $orijinalAd="admin";
// $orijinalSifre="1234";
$kadi = mysqli_real_escape_string($baglanti,$_POST["kullaniciAdi"]);
$ksifre = mysqli_real_escape_string($baglanti,$_POST["kullaniciSifre"]);

// $kullaniciAdi=$_POST["kullaniciAdi"];
// $kullaniciSifre=$_POST["kullaniciSifre"];

$sorgu = "SELECT * FROM kullanicilar WHERE kadi='$kadi' AND ksifre='$ksifre'";
$sonuc = mysqli_query($baglanti,$sorgu);

// if(($orijinalAd==$kullaniciAdi)&&($orijinalSifre==$kullaniciSifre)){
//       ( ob_start();
//        session_start();
//        $_SESSION["kullaniciAdi"]=$kullaniciAdi;
//        header("location:index.php");

// }
// else{
//        header("location:login.php");
// }

if($sonuc){
       $count = mysqli_num_rows($sonuc); 

}
if($count>0){

       // if(($orijinalAd==$kadi)&&($orijinalSifre==$ksifre)){
              ob_start();
              session_start();
              $_SESSION["kullaniciAdi"]=$kadi;
              header("location:index.php");
       }            
       // }
       else{

              header("location:login.php");
       }


?>
