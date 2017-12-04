<?php
  $server_name = "localhost";
  $user_name = "root";
  $password = "";
  $database_name = "am1b_2017_blok2_crud";

  // Met myqli_connect maken we contact met onze mysql-server.
  $conn = mysqli_connect($server_name, $user_name, $password, $database_name);

  // Met deze query deleten we het record uit de tabel users
  $sql = "DELETE FROM `users` 
                WHERE `id` = " . $_GET["id"];

  // We vuren de query af op de database en krijgen het resultaat van deze select query terug
  $result = mysqli_query($conn, $sql);

  header("Location: ./index.php");
?>