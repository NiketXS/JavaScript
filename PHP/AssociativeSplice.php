<?php
$a1 = array("Kot" => 21, "Pies" => 31, "Chomik" => 41);
$a2 = array("Szczur" => 51);
print_r($a1) ;
echo "<br>" ;
array_splice($a1,0,0,$a2);
print_r($a1);
?>