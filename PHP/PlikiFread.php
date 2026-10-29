  <?php
    $myfile = fopen("placeholder.txt","r") or die("Unable to open file!");
    echo fread($myfile,filesize("placeholder.txt"));
    fclose($myfile);
    echo "<br>" ;
    echo readfile("placeholder.txt");
  ?>