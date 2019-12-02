<!--ici on insère le PHP qui n'est pas lié à l'affichage-->
<?php
//Déclaration de la variable km
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 1 Exercice 3</title>
  </head>
  <body>
    <p>
    <!--ici on insère le PHP qui est lié à l'affichage-->
      <?php
        $km = 1;
        echo $km;
        $km = 3;
        echo $km;
        $km = 125;
        echo $km;
      ?>
    </p>
  </body>
</html>
