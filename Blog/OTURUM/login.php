<?php
echo'
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link rel="stylesheet" href="../yonetici.css">
</head>
<body>
       <header></header>
       <main>
              <img src="../resimler/yonetici.jpg" alt="ana">
              <div class="main">
                     <h1>YÖNETİCİ GİRİŞİ</h1>
                     <form action="giris.php" method="POST">
                          <table>
                            <tr>
                                 <td><label for="text">KULLANICI ADI:</label></td>
                                 <td><input type="text" class="" name="kullaniciAdi" placeholder="Kullanıcı Adınız"></td><br><br>

                            </tr>
                            <tr>
                                   <td><label for="password"> KULLANICI ŞİFRE: </label></td>
                                 <td><input type="password" class="" name="kullaniciSifre" placeholder="Şifreniz"></td><br><br><br>
                            </tr>
                            <tr>
                                   <td></td>
                                   <td><input type="submit" name="kullaniciGiris" class="submit" value="GİRİŞ"></td>
                            </tr>
                          </table><br>
                     </form>
              </div>

       </main>
</body>
</html>
'
?>