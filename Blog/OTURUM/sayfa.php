 <?php
ob_start();
session_start();
if(isset($_SESSION["kullaniciAdi"])){
echo '
       <a href="makale_listele.php">MAKALELERİ LİSTELE</a> <br>
       <a href="makale_ekle.php">MAKALELERİ EKLE</a> <br>
       <a href="logout.php">ÇIKIŞ</a> <br>
       <a href="index.php">ANASAYFA</a> <br><br><br><br>

       <form action="islem.php" method="POST">
       <table>
              <tr>
                     <td>MAKALE ADI</td>
                     <td><input type="text" name="makale_adi"></td>
              </tr>
              <tr>
                     <td>MAKALE İÇERİĞİ</td>
                     <td>
                            <textarea name="makale_icerik" cols="250" rows="10"></textarea>
                     </td>
              </tr>
              <tr>
                     <td>YAYINDA MI?</td>
                     <td><input type="radio" name="makale_aktif" value="1"></td>
              </tr>
              <tr>
                     <td></td>
                     <td><input type="submit" name="makale_kaydet" value="KAYDET"></td>
              </tr>
       </table>
</form>
';
}
else{
header("location:index.php");
 }


 ?>
