<!DOCTYPE html>
<html>
<body>

<h2>İKİ SAYIYI TOPLAMA</h2>

<?php
if ( !isset( $_POST["sayi1"] ) ) { ?>

<form method="POST">

<!-- action="" ...... -->
<!-- method mutlaka gereklidi. GET veya POST olmalı. -->
<!-- GET: Formlara girilen değerler adres çubuğuna yazılır oradan sunucuya gönderilir. Kullanıcılar verileri görür.-->
<!-- POST dersek bu gönderme işlemini arkaplanda yapar.-->
  Birinci Sayıyı Giriniz:
  <!-- <br> -->
  <input type="text" name="sayi1" value="">
  <!-- istersek value kısmına formda gözükecek hazır değeri girebiliriz. -->
  <br>
  İkinci Sayıyı Giriniz:
  <input type="text" name="sayi2" value="">
  <!-- type kısmı değişken türü değil de form tipi: yani password, email gibi -->

  <br><br>
  <input type="submit" value="HESAPLA">
  <!-- type kısmı değişken türü değil de düğme görev tipi: yani Gönder, Gözat gibi -->
</form>

<h2>SONUÇ: </h2>

<?php } ?>

<?php
if ( isset( $_POST["sayi1"] ) )
{
  $A = $_POST["sayi1"];
  $B = $_POST["sayi2"];
  $Sonuc = $A + $B;
  echo "<h1>SONUÇ: $A + $B = $Sonuc</h1>";
  echo "<a href='?'>Yeni İşlem...</a>";
  // ? kısmı geldiği sayfaya gider. Adres çubuğundaki.php? ? kısmından sonrakileri silerek gider.
}
?>

<p>HESAPLA düğmesine basınca sonucu x sayfasına gönderir.</p>

</body>
</html>
