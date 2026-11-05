<?php 
  // Dane do logowania
  $servername = "localhost";
  $username = "root";
  $password = "";
  // Łączenie do serwera z podanymi danymi
  $conn = mysqli_connect($servername,$username,$password);
  //Sprawdzanie połączenia
  if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
  }
  echo "Connected successfully <br>";
  $database = "goetelNT";
  $sql = "CREATE DATABASE IF NOT EXISTS $database";
  if(mysqli_query($conn,$sql)){
    echo "Database created successfully <br>";
  } else {
    echo "Error creating database:".mysqli_error($conn);
  }
  if(mysqli_select_db($conn,$database)){
    echo "Database $database selected <br>";
  } else {
    echo "Error select database:".mysqli_error($conn);
  }
    $sql = "CREATE TABLE IF NOT EXISTS MyGuests( 
       id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       firstname VARCHAR(30) NOT NULL,
       lastname VARCHAR(30) NOT NULL,
       email VARCHAR(50) UNIQUE,
       reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP )";
 if (mysqli_query($conn,$sql)){
    echo "Table MyGuests created successfully <br>";
 }else{
    echo "Error creating table: ".mysqli_error($conn);
 }
 $sql="INSERT IGNORE INTO MyGuests (firstname,lastname,email)
  VALUES('Jan','Taran','foka@yahoo.com'),
  ('Paweł','Józefowicz','porkchop@google.pl'),
  ('Bogdan','Łodyga','jamaica@hr.com'),
  ('Patrycja','Łodyga','sonjohn@wp.pl'),
  ('David','Martinez','edgerunnners@web.nc'),
  ('Wiesław','Moniuszko','huragan@skawica.de'),
  ('Henryk','Bajoro','koparkarka@skawica.de'),
  ('Arkadiusz','Niedziela','nofun@weekend.pl')";
  if (mysqli_query($conn,$sql)){
    echo "New records created succesfully <br>";
  }else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
  }
  $sql="SELECT id, firstname, lastname FROM MyGuests";
  $results = mysqli_query($conn,$sql);
  if(mysqli_num_rows($results)>0){
    while($row = mysqli_fetch_assoc($results)){
      echo "id: ".$row["id"]." - Name: ".$row["firstname"]." ".$row["lastname"]."<br>";
    }
  }else{
    echo "0 results";
  }
  echo "<br>";
  // SELECT DATA VERSION 2
  $sql="SELECT id, firstname, lastname FROM MyGuests";
  $results = mysqli_query($conn,$sql);
  echo "<ul>";
  if(mysqli_num_rows($results)>0){
    //output data of each row
    while($row = mysqli_fetch_row($results)){
      echo "<li>"."id: ".$row[0]." - Name: ".$row[1]." ".$row[2]."</li>"."<br>";
    }
  echo "</ul>";
  }else{
    echo "0 results";
  }


?>