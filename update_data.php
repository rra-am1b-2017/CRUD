<?php
  // Maak contact met de mysql-server
  include("./connect_db.php");
    
  $sql = "UPDATE `users` SET `voornaam`      = '{$_POST["voornaam"]}',
                            `tussenvoegsel`  = '{$_POST["tussenvoegsel"]}',
                            `achternaam`     = '{$_POST["achternaam"]}',
                            `leeftijd`       = '{$_POST["leeftijd"]}',
                            `schoenmaat`     = '{$_POST["schoenmaat"]}'
                      WHERE `id`             =  {$_POST["id"]};";

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