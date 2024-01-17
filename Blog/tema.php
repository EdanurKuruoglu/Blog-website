<?php

//_______________________________________________________________________________________ edebi.php

function edebi_head_kismi(){
   echo'<!DOCTYPE html>
   <html lang="en">
   <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link rel="stylesheet" href="tek.css">
          <link rel="stylesheet" href="style.css">
   </head>';
}

function edebi_header_kismi(){
   echo'<header>
   <h1>EDEBİ MAKALELER</h1>
</header>';
}

function edebi_main_kismi(){
   echo'';
}
                  




//__________________________________________________________________________________________ bilimsel.php
function bilimsel_head(){

   echo'<!DOCTYPE html>
   <html lang="en">
   <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link rel="stylesheet" href="tek.css">
   </head>';
}

function bilimsel_header(){
   echo'<header>
   <h1>BİLİMSEL MAKALELER</h1>
</header>';
}

function bilimsel_main(){
   echo'<main>
   <section>
          <div class="main">
                 <div class="parca">
                        <img src="resimler/makale/deep-fake.jpg" alt="Deep Fake Mona Lisa">
                        <p>
                               <h2>Deepfake Mona Lisa’yı hayata döndürdü</h2>
                               Deepfake hakkındaki bir çalışma Mayıs 2019 arxiv‘de yayımlandı. Çalışma, Altmetric’in listesinde ilk sıradan verildi.Samsung’tan Deepfake yapay zeka algoritması, Mona Lisa’yı adeta hayata geri döndürdü. Bir fotoğraf ya da resimden bir video oluşturmanın yolu açıldı. Üstelik o kadar gerçekçi ki…
                               Eğitilen algoritmalar bir fotoğraf ya da resmi canlandırabiliyor. Yaşamımızda hiç görmediğimiz hatta hiçbir hareketli görüntüsü olmayan kişilerin canlı görünümlü görüntülerini oluşturmak artık mümkün.
                        </p>
                 </div> 

                 <div class="clear"></div>

                 <div class="parca">
                        <img src="resimler/makale/hesap-mak.jpg" alt="İstatistik">
                        <p>
                               <h2>Bilim insanları istatistiklerin kesin olmadığına dikkat çekiyor</h2>
                               Yayınlarda sadece p değeri baz alınarak yapılan istatistiksel anlamlılık değerlendirmesi uzun süredir akademide tartışılan konulardan biri. Pek çok araştırmacı çalışmalarında diğer istatistiksel çıktıları değerlendirmeden sadece p değeri üzerinden sonuca ulaşıyor. Ancak bu durum bilerek ya da bilmeyerek hatalı değerlendirmeler ve sonuçların yayınlanmasına sebep oluyor. Akademide bu konuyla ilgili farkındalığı arttırmak için pek çok bilim insanı grubu çeşitli yayınlar yaptı ve p değerinin hatalı kullanımına dikkat çekti.
                        </p>
                 </div>

                 <div class="clear"></div>

                 <div class="parca">
                        <img src="resimler/makale/yapay_zeka.jpg" alt="Yapay Zeka">
                         <p>
                               <h2>Yapay zeka ile sahte fotoğraf üretmek</h2>
                               Aralık 2018’de arxiv‘de yayımlanan bu çalışma, yapay zeka (AI) teknolojisinin fotoğraflar açısından ne kadar geliştiğini gösteriyor. Yeni yapay zeka görüntü üreticisi, inandırıcı sahte görüntüler oluşturmanın hiç olmadığı kadar kolay olduğunu gösteriyor.2019’a yapay zeka algoritmalarının görüntü manipülasyonları damga vurmuş gibi görünüyor.
                        </p>

                 </div>

                 <div class="clear"></div>
          </div>
   </section>
</main>';
}





//________________________________________________________________________________________makale.php
function makaleler_head(){
   echo'<html lang="en">
   <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link rel="stylesheet" href="makaleler.css">
   </head>';
}

function makaleler_section_kismi(){
   echo'<section class="ust_menu">
   <nav>
       <ul>
          <li><a href="bilimsel.php" target="makale">BİLİMSEL MAKALELER</a></li>
          <li><a href="edebi.html" target="makale">EDEBİ MAKALELER</a></li>
          <li><a href="faydali.html" target="makale">GAZETE MAKALELERİ</a></li>
       </ul>
    </nav>
</section>';
}

function makaleler_main_kismi(){
   echo'<main>
   <iframe class="makale" title="makale" name="makale" width="100%" height="100%" src="" frameborder="0"></iframe>
</main>';
}





//_____________________________________________________________________________________ yazar.php


function yazar_head(){
   echo'
   <!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
       <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" href="yazarlar.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>
   ';
}

function yazar_main(){
   echo'<main>
   <div class="yazar">
          <h1>YAZARLARIMIZ</h1>
          <ul>
                 <li><img src="resimler/yazarlar/Ahmet_hamdi_tanpinar.jpg" alt=""><p>AHMET HAMDİ TANPINAR</p></li>
                 <li><img src="resimler/yazarlar/furuzan.jpg" alt=""><p>FÜRUZAN</p></li>
                 <li><img src="resimler/yazarlar/halide_edip.jpg" alt=""><p>HALİDE EDİP ADIVAR</p></li>
                 <li><img src="resimler/yazarlar/latife_tekin.jpg" alt=""><p>LATİFE TEKİN</p></li>
                 <li><img src="resimler/yazarlar/oguz_atay.jpg" alt=""><p>OĞUZ ATAY</p></li>
                 <li><img src="resimler/yazarlar/orhan_pamuk.webp" alt=""><p>ORHAN PAMUK</p></li>
                 <li><img src="resimler/yazarlar/resat_nuri.jpg" alt=""><p>REŞAT NURİ GÜNTEKİN</p></li>
                 <li><img src="resimler/yazarlar/sabahattin_ali.jpg" alt=""><p>SABAHATTİN ALİ</p></li>
                 <li><img src="resimler/yazarlar/saitfaik.jpg" alt=""><p>SAİT FAİK ABASIYANIK</p></li>
                 <li><img src="resimler/yazarlar/tarik_bugra.jpg" alt=""><p>TAĞRIK BUĞRA</p></li>
          </ul>
   </div>
</main>';
}


// _______________________________________________________________________________Editor.php

function editor_head(){
   echo'<!DOCTYPE html>
   <html lang="en">
   <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
          <link rel="stylesheet" href="editor.css">
          <link rel="stylesheet" href="style.css">
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" >
   </head>';
}

function editor_main_kismi($icerik){
   echo'<main>
   <section>
         <div class="main">
                 <div class="parca">
                 '.$icerik.'
                 <div class="clearfix"></div>
                 </div>
         </div>
   </section>
                 ';
}
// function editor_main_kismi_icerik_listele()
function editor_main_kismi_icerik_listele(){
   echo'
   <main>
   <section>
          <div class="main">
                 <div class="parca">
                        <img src="resimler/editor/tutuanamayan.jpg" alt="Tutunamayanlar">
                        <p>
                               <h2>OĞUZ ATAY - TUTUNAMAYANLAR</h2>
                               Selim Işık’ın intihar ettiğini öğrenen Turgut Özben, ihmal ettiğini düşündüğü arkadaşının geçmişinin izini sürmeye ve Selim’in tanıdığı insanlar aracılığıyla onu tanımaya çalışır. Her insana farklı bir yönünü gösteren Selim’in görüntüsü, Turgut’un bu insanlarla konuşması sonucu okuyucunun ve Turgut’un gözünde netlik kazanacaktır. Romanda bir çok kişi vardır ama her biri aslında Selim’in hayatındaki kişilerdir ve tüm anlatılanlar Selim Işık’ı aydınlatır. Selim Işık “düşünen ve sorgulayan insan”ın simgesidir ve bu yüzden “tutunamamış”tır...
                        </p>
                 </div> 

                 <div class="clear"></div>


                 <div class="parca">
                            <img src="resimler/editor/masumiyet.jpg" alt="Masumiyet Müzesi">
                             <p>
                                   <h2>ORHAN PAMUK - MASUMİYET MÜZESİ</h2>Selim Işık’ın intihar ettiğini öğrenen Turgut Özben, ihmal ettiğini düşündüğü arkadaşının geçmişinin izini sürmeye ve Selim’in tanıdığı insanlar aracılığıyla onu tanımaya çalışır. Her insana farklı bir yönünü gösteren Selim’in görüntüsü, Turgut’un bu insanlarla konuşması sonucu okuyucunun ve Turgut’un gözünde netlik kazanacaktır. Romanda bir çok kişi vardır ama her biri aslında Selim’in hayatındaki kişilerdir ve tüm anlatılanlar Selim Işık’ı aydınlatır. Selim Işık “düşünen ve sorgulayan insan”ın simgesidir ve bu yüzden “tutunamamış”tır...

                     </div>

                     <div class="clear"></div>

                    
                     <div class="parca">
                     <img src="resimler/editor/cali.jpg" alt="Çalıkuşu">
                      <p>
                            <h2>REŞAT NURİ GÜNTEKİN - ÇALIKUŞU</h2>Feride, küçük yaşta anne ve babasını kaybeder. Teyzesinin korumasıyla bir Fransız yatılı okulunda okur. Yaramazlıkları yüzünden arkadaşları, okulda, ona “Çalıkuşu” adını takarlar.
                            Feride, yaz tatillerini teyzesinin köşkünde geçirir. Teyzesinin yakışıklı oğlu Kamuran ile birbirlerini severler ve nişanlanırlar. Feride, düğün günü, bir kadının getirdiği mektuptan Kamuran’ın lsviçre’de iken Münevver adında hasta bir kızla ilişkisi olduğunu, ona evlenme sözü verdiğini öğrenir öğrenmez, her şeyi yüzüstü bırakıp kaçar. Feride, Anadolu’nun çeşitli yerlerinde (Zeyniler Köyü, Bursa, Çanakkale … ) öğretmenlik yapar...
                     </p>

              </div>

              <div class="clear"></div>

             

                 
          </div>
   </section>
 </main>';
}




//__________________________________________________________________________________________index.php

function head_kismi($title){
       echo'<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>'.$title.'</title>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
       <link rel="stylesheet" href="style.css">
       
       <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Adlam&family=Nunito:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
</head> ';
}

function baslik($baslik){
   echo'<body>
   <header class="baslik">
      <a href="index.php"><h1>'.$baslik.'</h1></a>
   </header>';
}
function menu($baslik,$editor,$yazar,$makale,$yonetici){
       echo '
       <body>
   <header class="baslik">
      <a href="index.php"><h1>'.$baslik.'</h1></a>
   </header>
   
   <section class="ust_menu">
      <nav>
      </nav>
      <nav>
         <ul>
            <li><a href="index.php">ANASAYFA</a></li>
            <li><a href="editor.php">'.$editor.'</a></li>
            <li><a href="yazar.php">'.$yazar.'</a></li>
            <li><a href="makale.php">'.$makale.'</a></li>
            <li><a href="OTURUM/login.php">'.$yonetici.'</a></li>
         </ul>
      </nav>
   </section>
       ';
}

function tanitim(){
       echo '
       <main>
      <section >
         <div class="tanitimlarr">
         <article class="daha_fazlasi">
            <img src="resimler/work.svg" alt="tanıtım">
            <div class="hakkinda"> 
               <h1>HEDEFLERİMİZ VE AMAÇLARIMIZ</h1>
               <p>Web sitemizde her şeyin hayal kurmak ile başlayacağını söylemek isteriz. O hayalleri amaçlara, amaçları hedeflere, hedefleri projelere, planlara ve eyleme döktüğünüzde ancak o hayaliniz gerçek olacağını söylüyoruz.  Hepimiz, gelecekte olmak istediğimiz yerle ilgili bir arzulara sahibiz. Vizyonumuza yani gelecek resmimize ulaşmada bizi hareketsiz kılan, motivasyonumuzu azaltan, coşkumuzu yok eden, heyecanımızın kaybolmasına neden olan, çabalarımızın devamını getirmekten bizi alıkoyan nedir? Öncelikle “İlk Adımı Atmadaki Cesaretsizliğimizdir”, “Korkularımızdır”, daha sonra ise “Amaçsızlık, Hedefsizlik” tir. Bu yola çıkmamızın sebebi sizi hayallerinizin bir adım ötesine taşımaktır. Ne demişler "İnsan dünyada hayal ettiği kadar vardır."</p>
               <h3>İYİ OKUMALAR <i class="fa-regular fa-heart"></i></h3>
            </div>
         </article>
      </div>
      </section>
       ';
}
 
function editor_seckisi($editorBaslik){
       echo'
       <section class="son_eklenenler">
         <div class="guncelle">
            <h1>'.$editorBaslik.'</h1>
            <div class="link">
               <ul>
                  <li><a href="editor.php"><img src="resimler/editor/tutuanamayan.jpg" alt="TUTUNAMAYANLAR"><p>TUTUNAMAYANLAR</p></a></li>
                  <li><a href="editor.php"><img src="resimler/editor/masumiyet.jpg" alt="MASUMİYET MÜZESİ"><p>MASUMİYET MÜZESİ</p></a></li>
                  <li><a href="editor.php"><img src="resimler/editor/cali.jpg" alt="ÇALIKUŞU"><p>ÇALIKUŞU</p></a></li>
               </ul>
            </div>
        </div>
      </section>
       ';
}

function makale($makaleBaslik){
       echo'
       <section class="son_eklenenler">
         <div class="guncelle">
            <h1>'.$makaleBaslik.'</h1>
            <div class="link">
               <ul>
                  <li><a href="bilimsel.php"><img src="resimler/makale/d.jpg" alt="bilimsel"><p>BİLİMSEL</p> <p>Hafızanı Güçlendirmeye Ne Dersin?</p></a></li>
                  <li><a href="edebi.html"><img src="resimler/makale/images.jpeg" alt="edebi"><p>EDEBİ</p><p>Hayatın Bir Tık Ötesindekileri Keşfet.</p></a></li>
                  <li><a href="faydali.html"><img src="resimler/makale/farkli.png" alt="faydalı"><p>FAYDALI</p><p>Yeni Bilgiler Keşfetmeye Var Mısın?</p></a></li>
               </ul>
            </div>
        </div>
      </section>
      
   </main>
       ';
}



function footer($hakkimizda,$hakkimizdaAciklama,$hakimizdaIletisim,$konum,$mail,$tel,$takip,$facebook,$insta,$linkedln){
   $link=array("https://tr-tr.facebook.com/","https://www.instagram.com/","https://www.linkedin.com/");
   $icon=array("facebook","instagram","linkedin");
   $icerik=array("Facebook","Instagram","Linkedin");    
   echo'
       <div class="end"></div>

       <footer>
       <div class="footer">
          <div class="footer_aboutus">
             <h2>'.$hakkimizda.'</h2>
             <p>'.$hakkimizdaAciklama.'</p>
          </div>
          <div class="footer_info">
             <h2>'.$hakimizdaIletisim.'</h2>
             <ul>
                <li><a href="https://www.kastamonu.edu.tr/"><i></i><p>'.$konum.'</p></a></li>
                <li><a href="#"><i></i><p>'.$mail.'</p></a></li>
                <li><a href="#"><i></i><p>'.$tel.'</p></a></li>
             </ul>
          </div>
    
        <div class="footer_follow">
             <h2>'.$takip.'</h2>
             <ul>
             ';
             for($i=0;$i<count($icon);$i++){
               echo'<li><a href="'.$link[$i].'"><i class="fa-brands fa-'.$icon[$i].'"></i>  '.$icerik[$i].'</a></li>';
             }
               /* echo'<li><a href="https://tr-tr.facebook.com/"><i class="fa-brands fa-facebook"></i>  '.$facebook.'</a></li>
                <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i>  '.$insta.'</a></li>
                <li><a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i>  '.$linkedln.'</a></li>
             ';*/
                echo'</ul>
          </div>
       </div>
       </footer>
       
       </body>
       </html>
       ';

       
}

?>