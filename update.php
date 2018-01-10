<?php
  // Check of $_GET["id"] wel een getal is en geen string van een sql-injection
  if (is_numeric($_GET["id"])) {
  // Maak contact met database
  include("./connect_db.php");

  // Met deze query selecteren we de records uit de tabel users
  $sql = "SELECT * FROM `users` WHERE `id` = " . $_GET["id"];

  // We vuren de query af op de database en krijgen het resultaat van deze select query terug
  $result = mysqli_query($conn, $sql);

  // Maak van $result een assiatief array zodat we het kunnen gebruiken in de code
  $record = mysqli_fetch_assoc($result);

  } else {
    // Wanneer $_GET["id"] toch een string is dan terugsturen naar index.php    
    header("Location: ./index.php");
  }
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
      <form method="post" action="./update_data.php">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
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
            <option value="bruin">bruin haar</option>
            <option value="blond">blond haar</option>
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