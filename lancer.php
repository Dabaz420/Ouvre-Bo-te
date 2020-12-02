<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Résultat</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Wendy+One&display=swap" rel="stylesheet">
</head>
<body>

  <header>
      <img src="logojeu.webp" alt="logo">
      <img src="titrejeu.gif" alt="L'Ouvre-Boîte">
  </header>
  <main>
  <?php
        $nb_des = $_POST["nombre_de_des"] ?? false;
        $face_des = $_POST["nombre_de_faces"] ?? false;
        $num_de = 1;

        echo("<div class='resultat'>");
          while($nb_des > 0){
              $res = random_int(1, $face_des);
              echo("le résultat du dé numérau " . $num_de++ . " est $res <br/>");
              $nb_des--;
            }
        echo("</div>");

        $nb_des = $_POST["nombre_de_des"] ?? false;
        echo("<div class='bouton'>");
          echo("<a href='index.html'><button>Acceuil</button></a>");
          echo("<form action='lancer.php' method='post'>
                  <input type='hidden' name='nombre_de_des' id='nombre_de_des' value=$nb_des>
                  <input type='hidden' name='nombre_de_faces' id='nombre_de_faces' value=$face_des>
                  <button>Relancer</button>
                </form>");
        echo("</div>");
        
  ?>

  <img src="mdice.svg" alt="image">

  </main>

</body>
</html>