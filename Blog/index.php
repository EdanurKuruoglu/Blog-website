<?php
require_once("tema.php");
require_once("function.php");
$baglanti = baglan();

$title= "BLOG";
head_kismi($title);


$baslik = ".blogChain";
$editor = "EDİTÖRÜN SEÇTİKLERİ";
$yazar = "YAZARLARIMIZ";
$makale = "MAKALELER";
$yonetici = "YÖNETİCİ GİRİŞİ";

menu($baslik,$editor,$yazar,$makale,$yonetici);
tanitim();

$editorBaslik="EDİTÖRÜN SEÇTİKLERİ";
editor_seckisi($editorBaslik);

$makaleBaslik="MAKALELERİMİZ";
makale($makaleBaslik);

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


