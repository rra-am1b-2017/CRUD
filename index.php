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
    <main class="container">  
    <?php
      
      // $voornaam = "Arjan";
      // $adres = "Prins Hendrikstraat 17";
      // $leeftijd = 49;
      // $fruit0 = "Sinaasappel";
      // $fruit1 = "Mango";
      // $fruit2 = "Bosbessen";

      // $fruit = array("Aardbei", "Banaan", "Perzik", "Appel");

      // echo "<b>Mijn voornaam is:</b> " . $voornaam . "<br>";
      // echo "<b>Mijn adres is:</b> " . $adres . "<br>";
      // echo "Mijn leeftijd is: " . $leeftijd . "<br>";
      // echo "Mijn favoriete fruit nr 1 is: " . $fruit0 . "<br>";
      // echo "Mijn favoriete fruit nr 2 is: " . $fruit1 . "<br>";
      // echo "Mijn favoriete fruit nr 3 is: " . $fruit2 . "<br>";
      // echo "Dit stukje fruit staat in een array: " . $fruit[0]. "<br>";
      // echo "Dit stukje fruit staat ook in het array: " . $fruit[1]. "<br>";
      // echo "Dit stukje fruit staat ook in het array: " . $fruit[2]. "<br>";
      // echo "Dit stukje fruit staat ook in het array: " . $fruit[3]. "<br>";

      // echo "<hr>";

      // /*  Opdracht: Zet de volgende gegevens in een array:
      //   voornaam, tussenvoegsel, achternaam, straatnaam, postcode, woonplaats, leeftijd, schoenmaat, haarkleur. 
      //   Echo deze gegevens in  een goed lopende zin naar het scherm.
      // */

      // // Dit is de eerste comment methode. Hij geldt voor een regel

      // /*
      //    De tweede comment methode 
      //    commentarieerd meerdere regels uit.
      // */

      // # Dit is de derde methode om uit te commentarieren

      // // Dit is een indexed array
      // $user = array("Arjan", "de", "Ruijter", "Prins Hendrikstraat", "17", "1901 CB", "Castricum", 49, 45, "grijs");
      
      // // Dit is een associatief array
      // $user1 = array("voornaam"      => "Bert",
      //               "tussenvoegsel" => "de",
      //               "achternaam"    => "Vries",
      //               "straatnaam"    => "Jan Willem Prinsstraat",
      //               "huisnummer"    => "34",
      //               "postcode"      => "1051 XM",
      //               "woonplaats"    => "Heiloo", 
      //               "leeftijd"      => 84,
      //               "schoenmaat"    => 35, 
      //               "haarkleur"     => "grijs");

      // // var_dump($user1);

      // echo "Mijn naam is: " . $user[0] . " " . $user[1] . " " . $user[2] . "<br>";
      // echo "De straat waar ik woon: " . $user[3] . " " . $user[4] ."<br>";

      // echo "<hr>";
      // echo "Mijn naam is: " . $user1["voornaam"] . " " . $user1["tussenvoegsel"] . " " . $user1["achternaam"] . "<br>";
      // echo "De straat waar ik woon: " . $user1["straatnaam"] . " " . $user1["huisnummer"] ."<br>";
    ?>


    <?php
      $server_name = "localhost";
      $user_name = "root";
      $password = "";
      $database_name = "am1b_2017_blok2_crud";
    
      // Met myqli_connect maken we contact met onze mysql-server.
      $conn = mysqli_connect($server_name, $user_name, $password, $database_name);

      // Met deze query selecteren we de records uit de tabel users
      $sql = "SELECT * FROM `users`";
    
      // We vuren de query af op de database en krijgen het resultaat van deze select query terug
      $result = mysqli_query($conn, $sql);

      //var_dump($result);
      // Maak van $result een assiatief array zodat we het kunnen gebruiken in de code
      //$records = mysqli_fetch_assoc($result);

      //var_dump($records);

      // $i = 0;
      // while ($i <= 5) {
      //   echo $i . "<br>";
      //   $i = $i + 1;
      // }

      $table_content = "";
      while ($records = mysqli_fetch_assoc($result)) {
        //var_dump($records);
        $table_content  = $table_content . "<tr>
                                              <td>" . $records["id"] . "</td>
                                              <td>" . $records["voornaam"] . "</td>
                                              <td>" . $records["tussenvoegsel"] . "</td>
                                              <td>" . $records["achternaam"] . "</td>
                                              <td>" . $records["leeftijd"] . "</td>
                                              <td>" . $records["schoenmaat"] . "</td>
                                              <td>
                                                <a href='./update.php?id=" . $records["id"] . "'>
                                                  <img src='./img/edit.png' alt='potlood-wijzig-record'>
                                                </a>
                                              </td>
                                              <td>
                                                <a href='./delete.php?id={$records["id"]}'>
                                                  <img src='./img/drop.png' alt='kruis-delete-record'>
                                                </a>
                                              </td>
                                            </tr>";
      }

      
    ?>
    

    <h3>Vul hieronder je gegevens in:</h3>
    <form method="post" action="./data.php">
      voornaam: <input type="text" name="voornaam"><br>
      tussenvoegsel: <input type="text" name="tussenvoegsel"><br>
      achternaam: <input type="text" name="achternaam"><br>
      leeftijd: <input type="number" name="leeftijd" min="18" max="123"><br>
      schoenmaat: <input type="number" name="schoenmaat" min="26" max="48"><br>
      wachtwoord: <input type="password" name="wachtwoord"><br>
      Haarkleur: <select name="haarkleur"><br>
                    <option value="bruin">bruin haar</option>
                    <option value="blond">blond haar</option>
                 </select><br>
      <input type="submit" value="Drukken maar!"><br>
    </form>

    <hr>

    <table class="table table-hover">
      <thead>
        <tr>
          <th>id</th>
          <th>Voornaam</th>
          <th>tussenvoegsel</th>
          <th>Achternaam</th>
          <th>Leeftijd</th>
          <th>schoenmaat</th>
          <th></th>
          <th></th>
        </tr> 
      </thead>
      <tbody>
        <?php echo $table_content; ?>
      </tbody>    
    </table>

    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>