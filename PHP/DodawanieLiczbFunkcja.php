<?php 
   //SUMA 2 LICZB
   function sum_two($num1, $num2){
    return $num1 + $num2;
   }
   //SUMA 3 LICZB
   function sum_three($num1, $num2,$num3){
    return $num1 + $num2 + $num3;
   }
   //SUMOWANIE ELEMENTOW TABLICY
   function sum_array($arr){
    $ArrSum = 0 ;
    foreach($arr as $data) {
        $ArrSum += $data;
    }
    return $ArrSum;
   }
   $bin = array(3,2,6);
   echo sum_three(2,4,3)."<br>";
   echo sum_two(5,5)."<br>";
   echo sum_array($bin)."<br>";
?>