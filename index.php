<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
<p>
<?php
  $lastName = 'lamotte';
  $firstName = 'fabien';
  $age = 18;
  settype($age, 'int');
  echo 'bonjour ' . $lastName . ' ' . $firstName . ', tu as ' . $age . ' ans.'
 ?>
</p>
  </body>
</html>
