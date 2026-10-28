<?php
  $arra = array[11,12,13,14,15,16]
  function MinMaxSwitch($arr){
    $i = 0;
    for($i=0;$i < count($arr);$i++ ){
      $min = $arr[0];
      $mincomp = $arr[$i];
      $max = $arr[0];
      $maxcomp = $arr[$i]
      if ($min >= $mincomp){
        $min = $mincomp;
      }
      if($max <= $maxcomp){
        $max = $maxcomp;
      }
    }
    return 
  }
  echo MinMaxSwitch($arra);
?>