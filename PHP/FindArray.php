<?php
  $arr = array("7,4,2")
  function find_array($arr, $num){
    $i = 0 ;
    while($arr[$i] != $num){
        $i++ ;
    }
    return $i;
  }
  echo find_array()
?>