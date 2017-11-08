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
      $voornaam = "Arjan";
      $adres = "Prins Hendrikstraat 17";
      $leeftijd = 49;
      $fruit0 = "Sinaasappel";
      $fruit1 = "Mango";
      $fruit2 = "Bosbessen";

      $fruit = array("Banaan", "Perzik", "Appel", "Aardbei");

      echo "<b>Mijn voornaam is:</b> " . $voornaam . "<br>";
      echo "<b>Mijn adres is:</b> " . $adres . "<br>";
      echo "Mijn leeftijd is: " . $leeftijd . "<br>";
      echo "Mijn favoriete fruit nr 1 is: " . $fruit0 . "<br>";
      echo "Mijn favoriete fruit nr 2 is: " . $fruit1 . "<br>";
      echo "Mijn favoriete fruit nr 3 is: " . $fruit2 . "<br>";
      echo "Dit stukje fruit staat in een array: " . $fruit[0]. "<br>";
      echo "Dit stukje fruit staat ook in het array: " . $fruit[1]. "<br>";
      echo "Dit stukje fruit staat ook in het array: " . $fruit[2]. "<br>";
      echo "Dit stukje fruit staat ook in het array: " . $fruit[3]. "<br>";

      echo "<hr>";

      for ($i = 0; $i < count($fruit); $i++) {
        echo "Dit fruit zit in het array: " . $fruit[$i] . "<br>";
      }


    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>