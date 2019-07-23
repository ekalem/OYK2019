<!DOCTYPE html>
<?php
phpinfo(); // PHP Version bilgilerini ekrana yazdırır.
?>

<html>
<title>INFO SAYFASI</title>
<body>

<h1>Merhaba PHP</h1> <!-- h1 başlığı -->

<?php

<?php
echo "Merhaba Dünya!"; // Ekrana yazdırma komutu
?>

<?php if ($A == 5): ?>

<p> A değişkeninin değeri 5 tir. </p>

<?php else: ?>

<p> A değişkeninin değeri 5 tir. </p>

<?php endif: ?>

<?php
$sayi = $ GET["sayi"];
echo "SAYI değişkeni değeri: $sayi "
?>

<?php
$isimler = array("Nuri","Ahmet","Ayşe");
$sayilar = array(1,2,3,4,5,6,7);
$kodla = array("zn" => "Çinko","fe" => "Demir");
$karma = array("Nuri","Ahmet","Ayşe");
echo "<pre>"
print_r($isimler);
?>

<?php
phpinfo(); // PHP Version bilgilerini ekrana yazdırır.
?>

?>
</body>

</html>
