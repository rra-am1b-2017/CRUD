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

      $fruit = array("Aardbei", "Banaan", "Perzik", "Appel");

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

      /*  Opdracht: Zet de volgende gegevens in een array:
        voornaam, tussenvoegsel, achternaam, straatnaam, postcode, woonplaats, leeftijd, schoenmaat, haarkleur. 
        Echo deze gegevens in  een goed lopende zin naar het scherm.
      */

      // Dit is de eerste comment methode. Hij geldt voor een regel

      /*
         De tweede comment methode 
         commentarieerd meerdere regels uit.
      */

      # Dit is de derde methode om uit te commentarieren

      // Dit is een indexed array
      $user = array("Arjan", "de", "Ruijter", "Prins Hendrikstraat", "17", "1901 CB", "Castricum", 49, 45, "grijs");
      
      // Dit is een associatief array
      $user1 = array("voornaam"      => "Bert",
                    "tussenvoegsel" => "de",
                    "achternaam"    => "Vries",
                    "straatnaam"    => "Jan Willem Prinsstraat",
                    "huisnummer"    => "34",
                    "postcode"      => "1051 XM",
                    "woonplaats"    => "Heiloo", 
                    "leeftijd"      => 84,
                    "schoenmaat"    => 35, 
                    "haarkleur"     => "grijs");

      // var_dump($user1);

      echo "Mijn naam is: " . $user[0] . " " . $user[1] . " " . $user[2] . "<br>";
      echo "De straat waar ik woon: " . $user[3] . " " . $user[4] ."<br>";

      echo "<hr>";
      echo "Mijn naam is: " . $user1["voornaam"] . " " . $user1["tussenvoegsel"] . " " . $user1["achternaam"] . "<br>";
      echo "De straat waar ik woon: " . $user1["straatnaam"] . " " . $user1["huisnummer"] ."<br>";
    ?>


    
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