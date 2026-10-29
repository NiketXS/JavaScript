<?php
 $liczba = 1 ;
 $lista = [] ;
  while ($liczba <= 100) {
     array_push($lista, $liczba);
     $liczba++ ;
  };
  foreach($lista as $element){
    echo $element."<br>" ;
  };
 print_r($lista);
?>