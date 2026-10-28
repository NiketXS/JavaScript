<?php
   $kosz = array("Marchew","Gruszka","Jabłko");

   function ZamianaElementów($arr){
    $arr = array_reverse($arr);
    return $arr;
   }
   print_r(ZamianaElementów($kosz));
?>