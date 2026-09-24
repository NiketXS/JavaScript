<?php
   $fruits =array("Jabłko"=> 7.99, "Gruszka" => 8.22,"Truskawka"=> 2.99);
   array_merge(array("Kiwi" => 5),$fruits);
   $fruits["Liczi"] = 10;
   print_r($fruits);
?>