<?php
  // Maak contact met de mysql-server
  include("./connect_db.php");
  include("./functions/function.php");

  $voornaam       = sanitize($_POST["voornaam"]);
  $tussenvoegsel  = sanitize($_POST["tussenvoegsel"]);
  $achternaam     = sanitize($_POST["achternaam"]);
  $leeftijd       = sanitize($_POST["leeftijd"]);
  $schoenmaat     = sanitize($_POST["schoenmaat"]);
  $id             = sanitize($_POST["id"]);
    
  $sql = "UPDATE `users` SET `voornaam`      = '{$voornaam}',
                            `tussenvoegsel`  = '{$tussenvoegsel}',
                            `achternaam`     = '{$achternaam}',
                            `leeftijd`       = '{$leeftijd}',
                            `schoenmaat`     = '{$schoenmaat}'
                      WHERE `id`             =  {$id}";

  //echo $sql;
  //echo "De gegevens zijn goed geupdate naar de database";exit();

  mysqli_query($conn, $sql);

  // Hiermee wordt de verbinding verbroken.
  mysqli_close($conn);


  
  // Met deze code kun je even blijven op de pagina en dan teruggaan
  // header("refresh:40; url=./index.php");

  // Je wordt nu direct teruggestuurd naar index.php
  header("Location: ./index.php");
?>