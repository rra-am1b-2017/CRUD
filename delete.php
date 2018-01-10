<?php
  // Met de functie is_numeric() test je of de $_GET["id"] variabele wel een integer (getal) dit is om sql-injection tegen te gaan

  if (is_numeric($_GET["id"])) {
    // Maak contact met de mysql-server
    include("./connect_db.php");

    // Met deze query deleten we het record uit de tabel users
    $sql = "DELETE FROM `users` 
    WHERE `id` = " . $_GET["id"];

    // We vuren de query af op de database en krijgen het resultaat van deze select query terug
    $result = mysqli_query($conn, $sql);
  }
  header("Location: ./index.php");
?>