<?php  
  $age1 = array("Peter"=>"35","Ben"=>"37","Oscar"=>"54"); //1 sposób
  $age2= ["Peter"=>"35","Ben"=>"37","Oscar"=>"54"]; // 2 sposób
  $age3 = []; //3 sposób
  $age3["Peter"] = "35";
  $age3["Ben"] = "37";
  $age3["Oscar"] = "67";
  print_r($age1);
  print_r($age2);
  print_r($age3);
?>