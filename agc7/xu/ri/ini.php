<?php namespace GC7; ?>
<div class="jumbotron">

  <h1 class="meaDo pb10"><a
      href="https://openclassrooms.com/courses/la-representation-intervallaire" target="_blank">XU
      (RI)</a>
  </h1>

  <p class="lead">ToDo</p>
  <ul>
    <ol>
      <li>New Table simplifiée (www_boos2013 => xu)<br>
        En cours
      </li>
      <li>Boucle pour rejouer insertion du premier au dernier</li>
      <ul>
        <li>Prépa table xu<br>
          Vue -> xu (uid, uname, lv, typ, lva, lvp, parr) en ajoutant bg, bd, pf
        </li>
        <li>Boucle (LOOP)</li>
        <li>Tests</li>
        <li>Appliquer dsans P100 (OCMS)<br>
          (Avec migration + seeder)
        </li>
      </ul>

    </ol>
  </ul>

</div>

<div class="maingc7">
  Ready.
  <?php

  $pdo = pdo();

  //  $sql = "SELECT 1";
  //  $req( $sql, $pdo );

  //  affLign( $sql ); // Pour requête sans affichage de réponse
  //  $pdo->query( $sql );


  echo str_repeat( '<br>', 25 ); // 28
  // Rappel doc SLIDES_3013.ppt (Chapitre / optimisations)
  ?>
</div>