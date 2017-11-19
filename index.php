<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    
    <?php
      // Maak de credential veriabelen
      $server_name = "localhost";
      $user_name = "root";
      $password = "";
      $database_name = "am1b_2017_blok2_crud";

      // gebruik mysqli_connect() om contact te maken met de database.

      $conn = mysqli_connect($server_name, $user_name, $password, $database_name);
      
      if (!$conn) {
        echo "Probeer het nog eens";
      } else {
        //echo "Het is gelukt met de verbinding";
        //var_dump($conn);
      }

      $sql = "SELECT * FROM `users`";

      $result = mysqli_query($conn, $sql);

      /* var_dump(mysqli_fetch_assoc($result));
      while ( $record = mysqli_fetch_assoc($result)) {
        var_dump($record);
      } */

      // Maak een formulier
      

    ?>

    <table class="table table-hover">
      <thead>
        <tr>
          <th>id</th>
          <th>Voornaam</th>
          <th>tussenvoegsel</th>
          <th>Achternaam</th>
        </tr>
      </thead>
      <tbody>
        
          <?php
            while ( $record = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <th>{$record["id"]}</th>
                        <td>{$record["voornaam"]}</td>
                        <td>{$record["tussenvoegsel"]}</td>
                        <td>{$record["achternaam"]}</td>
                      </tr>";
                      
            }
          ?>
            
      </tbody>
    </table>


    
    <hr>
    <h3>Vul hieronder je gegevens in:</h3>
    <form method="post" action="./data.php">
      voornaam: <input type="text" name="voornaam">
      tussenvoegsel: <input type="text" name="tussenvoegsel">
      achternaam: <input type="text" name="achternaam">
      leeftijd: <input type="number" name="leeftijd" min="18" max="123">
      wachtwoord: <input type="password" name="wachtwoord">
      Haarkleur: <select name="haarkleur">
                    <option value="bruin">bruin haar</option>
                    <option value="blond">blond haar</option>
                 </select>
      <input type="submit" value="Drukken maar!">
    </form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>