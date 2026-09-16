<?php
  $cars1 = array("Volvo","Toyota","BMW"); //Pierwszy sposób tworzenia tablci
  $cars2 = ["Volvo","Honda","Fiat"]; //kwadratowe nawiasy zamiast array
  $cars3 = [];
  $cars3[0] = "Mazda";
  $cars3[1] = "Hyundai";
  $cars3[2] = "Ford";  //tworzy pusta tablice i przypisuje do danej pozycji
  print_r($cars1);
  print_r($cars2);
  print_r($cars3);
?>