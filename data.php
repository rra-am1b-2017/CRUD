<?php
  // var_dump($_POST); 
  // echo "Mijn voornaam is: " . $_POST["voornaam"]. " " .
  // $_POST["tussenvoegsel"] . " " .
  // $_POST["achternaam"] . "<br>";
  // echo "Mijn leeftijd is: " . $_POST["leeftijd"] . "<br>";
  // echo "Mijn haarkleur is: " . $_POST["haarkleur"] . "<br>";
  // echo "Mijn wachtwoord is: ". $_POST["wachtwoord"];
  // echo "<hr>";

  // Met onderstaande code kun je direct teruggaan naar een pagina
  //header("location: ./index.php");

  $server_name = "localhost";
  $user_name = "root";
  $password = "";
  $database_name = "am1b_2017_blok2_crud";

  // Met myqli_connect maken we contact met onze mysql-server.
  $conn = mysqli_connect($server_name, $user_name, $password, $database_name);

  /* $sql = "INSERT INTO `users` (`id`,
                             `voornaam`, 
                             `tussenvoegsel`, 
                             `achternaam`) 
              VALUES        (NULL, 
                             '". $_POST['voornaam']   ."', 
                             '". $_POST['tussenvoegsel']."', 
                             '" . $_POST["achternaam"] ."')"; */

 /*  $test = "Dit is {$_POST['voornaam']} een test";
  echo $test; */

  $sql = "INSERT INTO `users`  (`id`,
                                `voornaam`, 
                                `tussenvoegsel`, 
                                `achternaam`,
                                `leeftijd`) 
                  VALUES        (NULL, 
                                '{$_POST["voornaam"]}', 
                                '{$_POST['tussenvoegsel']}', 
                                '{$_POST["achternaam"]}',
                                '{$_POST["leeftijd"]}')";

  //echo $sql;
  echo "De gegevens zijn goed weggeschreven naar de database";

  mysqli_query($conn, $sql);

  // Hiermee wordt de verbinding verbroken.
  mysqli_close($conn);


  
  // Met deze code kun je even blijven op de pagina en dan teruggaan
  header("refresh:4; url=./index.php");
?>