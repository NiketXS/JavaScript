<?php 
  //Napisz program który  utworzy tablicę zawierającą nazwy czterech owoców.
  //Wypisz je w postaci listy za pomocą pętli for i while
  $a = array("Gruszka","Granat","Cytryna","Pomarańcza");
  $i = 0 ;
  while ($i != count($a)){
    echo $a[$i]."<br>" ;
    $i++ ;
  };
  echo "<br>";
  for ($x = 0;$x < count($a);$x++){
    echo $a[$x]."<br>";
  };
?>