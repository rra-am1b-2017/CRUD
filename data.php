<?php
  var_dump($_POST); 
  echo "Mijn voornaam is: " . $_POST["voornaam"]. " " .
  $_POST["tussenvoegsel"] . " " .
  $_POST["achternaam"] . "<br>";
  echo "Mijn leeftijd is: " . $_POST["leeftijd"] . "<br>";
  echo "Mijn haarkleur is: " . $_POST["haarkleur"] . "<br>";
  echo "Mijn wachtwoord is: ". $_POST["wachtwoord"];


  // Met onderstaande code kun je direct teruggaan naar een pagina
  //header("location: ./index.php");

  // Met deze code kun je even blijven op de pagina en dan teruggaan
  header("refresh:3; url=./index.php");
?>