<?php
  $tekst = "Hello";
  printf("[%s\n",$tekst); //wypisze [Hello]
  printf("[%10s]\n",$tekst); //Wypisze [    Hello]
  printf("[-%10s]\n",$tekst); //Wypisze [Hello    ]
  printf("[%.3s]\n",$tekst); // Wypisze [Hel]
  printf("[%10.3s]\n", $tekst); //Wypisze [       Hel]
  printf("%-10.3s\n", $tekst)// Wypisze [Hel     ]
?>