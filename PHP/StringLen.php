<?php
   echo strlen("Hello world!"); //output 12
   echo strlen("Łódź") //output 7 bo polskie znaki zajmuja 2 bajty
   echo mb_strlen("Łódź"); // output 4
   str_word_count("Hello world!") // output 4
?>