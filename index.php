<?php
/*Création tableau associatif departement*/
  $departements = array(
    /*Détermination des éléments clé => valeur*/
    'Aisne' => 02,
    'Nord' => 59,
    'Oise' => 60,
    'Pas-de-Calais' => 62,
    'Somme' => 80);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 9</title>
  </head>
  <body>
<p>
<?php
/*Affichage des éléments du tableau associatif*/
  foreach($departements as $cle => $element){
    echo $cle . ' (' . $element . ')<br />';
  }
?>
</p>
  </body>
</html>
