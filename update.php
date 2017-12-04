<?php
  //echo "Het meegegeven id=" . $_GET["id"];

  // Maak contact met database
  $server_name = "localhost";
  $user_name = "root";
  $password = "";
  $database_name = "am1b_2017_blok2_crud";

  // Met myqli_connect maken we contact met onze mysql-server.
  $conn = mysqli_connect($server_name, $user_name, $password, $database_name);

  // Met deze query selecteren we de records uit de tabel users
  $sql = "SELECT * FROM `users` WHERE `id` = " . $_GET["id"];

  // We vuren de query af op de database en krijgen het resultaat van deze select query terug
  $result = mysqli_query($conn, $sql);

  //var_dump($result);
  // Maak van $result een assiatief array zodat we het kunnen gebruiken in de code
  $record = mysqli_fetch_assoc($result);

  //var_dump($record);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>CRUD met PHP!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="container">
    <h3>Wijzig hieronder je gegevens:</h3>
      <form method="post" action="./data.php">

        <div class="form-group">
          <label for="voornaamId">voornaam:</label>
          <input type="text" name="voornaam" id="voornaamId" class="form-control" value="<?php echo $record["voornaam"]; ?>">
        </div>
        <div class="form-group">
          <label for="tussenvoegselId">tussenvoegsel:</label>
          <input type="text" name="tussenvoegsel" id="tussenvoegselId" class="form-control" value="<?php echo $record["tussenvoegsel"]; ?>" required>          
        </div>
        <div class="form-group">
          <label for="achternaamId">achternaam: </label>
          <input type="text" name="achternaam" id="achternaamId" class="form-control" value="<?php echo $record["achternaam"]; ?>">          
        </div>
        <div class="form-group">
          <label for="leeftijdId">leeftijd: </label>
          <input type="number" name="leeftijd" min="18" max="123" id="leeftijdId" class="form-control" value="<?php echo $record["leeftijd"]; ?>">          
        </div>
        <div class="form-group">
          <label for="schoenmaatId">schoenmaat: </label>
          <input type="number" name="schoenmaat" id="schoenmaatId" class="form-control" value="<?php echo $record["schoenmaat"]; ?>">          
        </div>
        <div class="form-group">
          <label for="haarkleurId">Haarkleur: </label>
          <select name="haarkleur" class="form-control custom-select" id="haarkleurId"><br>
            <option value="bruin"> >bruin haar</option>
            <option value="blond"> >blond haar</option>
          </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Drukken maar!</button>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>