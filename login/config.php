<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "e-boutique";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Erreur de connexion à la base de donnée".mysqli_connect_error();
  }
?>
