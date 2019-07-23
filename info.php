<!DOCTYPE html>
<html>
<title>INFO SAYFASI</title>
<body>

<h1>Merhaba PHP</h1> <!-- h1 başlığı -->

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
phpinfo(); // PHP Version bilgilerini ekrana yazdırır.
?>

</body>

</html>
