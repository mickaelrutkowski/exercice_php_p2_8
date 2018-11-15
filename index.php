<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
</head>
<body>
  <?php
  $isok = true;
   settype($isok, "bool");
  //settype definir le type de variable
  if ($isok)
 {
    echo "C'est ok !!!";
 }
 // sinon si votre age est superieur ou egal a 18 alors vous etes majeur
 else
 {
    echo "C'est pas bon !!!";
 }
 // sinon vous n'avez pas du rentré votre age car la variable ne contient pas de nombre
 ?>
</body>
</html>
