<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>P.O.O.</title>
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/gc7.css">
</head>

<body>
  <div class="navLi mtnav">
    <a href="/">Do</a> | P.O.O.
  </div>
  <hr>
  <div class="maingc7 mainPoo">

    <?php

  // Simple classe
  // include 'personne.php';

  // Classe Mère & classe fille
  include 'vehicule.php';

  // Classe Mère & classe fille /|\ : Bug exprès en fin de fichier
  // include 'kid.php';


  // Méthodes magiques __call()
  // include 'manchot.php';

  // Méthodes magiques __clone()
  //include 'point.php';

  // Méthodes magiques __sleep() & __wakeup()
  // include 'dormeur.php';


  // Classes abstraites et finales
  // include 'humains.php';


  // Iterator (Interface)
  // include 'iterator.php';

  // OneTrait (Trait)
  // include '../class/OneTrait.php';

  echo str_repeat( '<br>&nbsp;', 50 );

  ?>
      oOo
  </div>
</body>

</html>
