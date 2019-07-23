<?php

$sozler = array(
  "Bir elin nesi var",
  "Birimiz hepimiz için",
  "Saman altından su yürütmek",
  "Sora sora Bağdat bulunur";
)

echo $sozler[2];

veya

for ($i=1; $i<=10; $i++) {
  $SozNo = rand(0, 3);
  echo $sozler[ $SozNo ] . "<br />";
}


 ?>
