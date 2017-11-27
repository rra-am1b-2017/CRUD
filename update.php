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
    
  <div class="container">
    <h3>Wijzig hieronder je gegevens in:</h3>
      <form method="post" action="./data.php">

        <div class="form-group">
          <label for="voornaamId">voornaam:</label>
          <input type="text" name="voornaam" id="voornaamId" class="form-control">
        </div>

        <div class="form-group">
          <label for="tussenvoegselId">tussenvoegsel:</label>
          <input type="text" name="tussenvoegsel" id="tussenvoegselId" class="form-control">          
        </div>


        achternaam: <input type="text" name="achternaam"><br>
        leeftijd: <input type="number" name="leeftijd" min="18" max="123"><br>
        wachtwoord: <input type="password" name="wachtwoord"><br>
        Haarkleur: <select name="haarkleur"><br>
                      <option value="bruin">bruin haar</option>
                      <option value="blond">blond haar</option>
                  </select><br>
        <input type="submit" value="Drukken maar!"><br>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>