<?php
 class persegipanjang {
     private $panjang;
     private $lebar;
     function __construct($p, $l) {
         $this->panjang = $p;
         $this->lebar = $l;
     }
     function luas() {
         return $this->panjang * $this->lebar;
     }
     function keliling() {
         return 2 * ($this->panjang * $this->lebar);
     }
 }
?>