<?php
  //connexion à la base de données
  $server = "localhost";
  $user = "root";
  $pass = "root";
  $database = "partieldatabase1";
  
  $connection = mysqli_connect($server, $user, $pass, $database);
  
  if (!$connection) {
      die("Erreur");
  }
     // normalement ici la base de donnee est connecter
  ?>