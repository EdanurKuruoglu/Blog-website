<?php
require_once("tema.php");
require_once("function.php");

$id=$_GET["id"];
$baglanti=baglan();
$sorgu="SELECT * FROM editor";
$sonuc = mysqli_query($baglanti,$sorgu);
$satir=mysqli_fetch_assoc($sonuc);
$icerik=$satir["makale_icerik"];

editor_head();

$baslik = ".blogChain";
$editor = "EDİTÖRÜN SEÇTİKLERİ";
$yazar = "YAZARLARIMIZ";
$makale = "MAKALELER";
$yonetici = "YÖNETİCİ GİRİŞİ";

menu($baslik,$editor,$yazar,$makale,$yonetici);
editor_main_kismi($icerik);

$hakkimizda = "HAKKIMIZDA";
$hakkimizdaAciklama = "DAHA İYİSİ İÇİN BİZE KATIL !";
$hakimizdaIletisim = "İLETİŞİM BİLGİLERİ";
$konum = "Konum : Kastamonu Üniversitesi";
$mail =  "Mail : admin@gmail.com";
$tel = "Tel: 0538478338";
$takip = "BİZİ TAKİP EDİN";
$facebook = "Facebook";
$insta = "Instagram";
$linkedln = "Linkedin";

footer($hakkimizda,$hakkimizdaAciklama,$hakimizdaIletisim,$konum,$mail,$tel,$takip,$facebook,$insta,$linkedln);
?>