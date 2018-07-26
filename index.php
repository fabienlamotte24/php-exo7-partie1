<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
<p>
<?php
/*Déclaration des variables*/
  $lastName = 'lamotte';
  $firstName = 'fabien';
  $age = 18;
  /*Définition de la variable $age en nombre entier*/
  settype($age, 'int');
  /*Affichage*/
  echo 'bonjour ' . $lastName . ' ' . $firstName . ', tu as ' . $age . ' ans.'
 ?>
</p>
  </body>
</html>
