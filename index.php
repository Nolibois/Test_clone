<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h2>Afficher le prix sur le Web</h2>

  <?php
    $prix_ht  = 50;
    $tva      = 20;
    $prix_ttc = $prix_ht * "1.$tva";

    echo "Le prix TTC du produit est de $prix_ttc €.";
  ?>

  <h2>Condition d'achat en fonction d'un budget</h2>
  <?php
    $budget = 4.12;
    $achat  = 4.1;

  if ($budget < $achat) {
    echo "Vous ne pouvez pas acheter ce produit";
  } else {
    echo "Le produit est à vous";
  }
  
  // OU Version Ternaire
  ?>

  <h3>OU Version Ternaire</h3>
  <code>
    echo $budgetMesg = $budget > $achat? "Vous ne pouvez pas acheter ce produit" :  "Le produit est à vous";
  </code>

  <h2>Les boucles</h2>
  <?php
    for ($i=1; $i <= 10; $i++) { 
      echo "N°$i<br>";
    }
  ?>

  <h2>Carré avec boucle FOR (matrice)</h2>
  <?php
    for ($i=0; $i < 15; $i++) { 
      echo "*&nbsp;&nbsp;";


      for ($j=0; $j < 15; $j++) { 
        if ($i === 0 || $i === 14) {
          echo "*&nbsp;&nbsp;";

        }else {
          if ($j === 14) {
            echo "*&nbsp;&nbsp;";
          }else{
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
          }
        }
      }

      echo "<br>";
    }
  ?>

  <h2>Sapin (matrice)</h2>
  <?php

    $nbRows = 11;
    $spaces = 10;
    $stars = "";

    // Each line
    for ($i=0; $i < $nbRows; $i++) { 
      $stars .= "*";

      if ($i > 0) {
        $stars .= "*";
      }

      // Add spaces before stars
      $addSpaces = "";
      for ($j=0; $j < $spaces; $j++) { 
        $addSpaces .= "&nbsp;&nbsp;";
      }
      echo $addSpaces.$stars;
      $spaces--;

      $addSpaces = "";
      
      echo "<br>";

    }

    // Tree trunk
    # Each line
    for ($i=0; $i < 3; $i++) { 
      $stars = "******";
      $addSpaces = "";

      #Add spaces before stars
      for ($j=0; $j < 5; $j++) { 
        $addSpaces .= "&nbsp;&nbsp;&nbsp;";
      }

      echo $addSpaces.$stars;
      echo "<br>";
    }

  ?>

  <h2>Inverser une chaîne de caractères</h2>
  <p>Inverser ce texte</p>
  <?php
    $textToReverse = "Inverser ce texte";
    $resultRev = strrev($textToReverse);
    echo "<p>$resultRev<p>";

  ?>

  <h2>Nouvel exercice</h2>

</body>
</html>