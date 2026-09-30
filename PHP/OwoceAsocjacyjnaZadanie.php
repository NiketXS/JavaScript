<?php
  $a=array("Gruszka"=>2.99 , "Pomelo" =>3.44,"Ananas"=>12.20,"Winogrona"=>4.50);
  echo "<table>";
  foreach($a as $key => $value){
    echo "<tr><td>$key : $value zł<td></tr>";
  }
 echo "</table>";
?>