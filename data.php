<?php
  // Maak contact met de mysql-server
  include("./connect_db.php");


  $voornaam       = sanitize($_POST['voornaam']);
  $tussenvoegsel  = sanitize($_POST['tussenvoegsel']);
  $achternaam     = sanitize($_POST['achternaam']);
  $leeftijd       = sanitize($_POST['leeftijd']);
  $schoenmaat     = sanitize($_POST['schoenmaat']);


  function sanitize($data) {
    // addslashes maakt enkele quotjes (') en dubbele (") en backslashes (\) onschadelijk
    $data = addslashes($data);
    
    // htmlspecialchars maakt html tags onschadelijk
    $data = htmlspecialchars($data);
    return $data;
  }
  
  $sql = "INSERT INTO `users`  (`id`,
                                `voornaam`, 
                                `tussenvoegsel`, 
                                `achternaam`,
                                `leeftijd`,
                                `schoenmaat`) 
                  VALUES        (NULL, 
                                '$voornaam', 
                                '$tussenvoegsel', 
                                '$achternaam',
                                '$leeftijd',
                                '$schoenmaat')";

  //echo $sql; exit();
  echo "De gegevens zijn goed weggeschreven naar de database";

  mysqli_query($conn, $sql);

  // Hiermee wordt de verbinding verbroken.
  mysqli_close($conn);


  
  // Met deze code kun je even blijven op de pagina en dan teruggaan
  // header("refresh:40; url=./index.php");

  // Je wordt nu direct teruggestuurd naar index.php
  header("Location: ./index.php");
?>