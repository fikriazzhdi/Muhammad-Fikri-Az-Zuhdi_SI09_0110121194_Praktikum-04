<?php
 include_once "class_persegipanjang.php";
 $persegipanjang1 = new persegipanjang(9, 5);
 $persegipanjang2 = new persegipanjang(8, 3);

 echo "Luas Persegi Panjang 1 : " .$persegipanjang1->luas();
 echo "<br>Keliling Persegi Panjang 1 : " .$persegipanjang1->keliling();
 echo "<br>Luas Persegi Panjang 2 : " .$persegipanjang2->luas();
 echo "<br>Keliling Persegi Panjang 2 : " .$persegipanjang2->keliling();


?>