<?php
   $arr = array(23, 43 , 67, 25, 800, 9000, 1,4,5,6,7,2133211);
   $biggest = 0 ;
   $biggestposition = 0; 
   $i = 0 ;
   while ($i < count($arr)){
    if ($biggest < $arr[$i]){
      $biggest = $arr[$i];
      $biggestposition = $i;
      $i++;
      echo "$i. Biggest number is: $biggest and it is on position $biggestposition <br>";
    } 
    else{
        $i++;
        echo "$i. Biggest number is: $biggest and it is on position $biggestposition <br>";
    };
   };
   
?>