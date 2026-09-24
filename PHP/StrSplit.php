<?php //str_split() - konwertuje string na tablice
$str = "hello friend";
$arr1 = str_split($str);
$arr2 = str_split($str,3);
print_r($arr1);
print_r($arr2);
?>