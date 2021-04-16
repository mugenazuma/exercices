/* Exercice 0

// Testez les différents exemples du cours, à l'aide de la fonction var_dump().

/*Exemple 4 :

On peut faire une déclaration implicite en spécifiant l'index :

$tab[0] = "Pomme"; 
$tab[1] = "Poire"; 
$tab[2] = "Banane"; */

<?php
$tab[0] = "Pomme"; 
$tab[1] = "Poire"; 
$tab[2] = "Banane";

var_dump($tab);

?>

/*Exemple 2 :

Même tableau que l'exemple 1 mais déclaré différemment :

<?php
$tab[] = array(1, "janvier", "2016"); 
$tab[] = array(2, "février", "2017"); 
$tab[] = array(3, "mars", "2018"); 
$tab[] = array(4, "avril", "2019");
*/

<?php
$tab[] = array(1, "janvier", "2016"); 
$tab[] = array(2, "février", "2017"); 
$tab[] = array(3, "mars", "2018"); 
$tab[] = array(4, "avril", "2019");

var_dump($tab);

?>

/* Exemple :

<?php
$mois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");

echo count($mois); // Affiche 12 
*/

<?php
$mois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");

echo count($mois); // Affiche 12

var_dump($mois);
?>

/****************************************


/* Exercice 1

 Quelle semaine a lieu la validation du groupe 19002 ?
 */

<?php
$compteur = 0;
$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre",
 "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
     "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage",
      "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
     "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", 
     "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
    );

foreach($a['19002'] as $semaine)
{
    $compteur++;
    if ($semaine == 'Validation')
    {
        echo 'La validation du groupe 2 à lieu la semaine n° ' .$compteur ;
    break;
    }
}
echo '<br>';
?>


/* Exercice 2

 Trouver la position de la dernière occurrence de Stage pour le groupe 19001.
*/

<?php
$compteur = 0;
$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre",
 "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
     "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage",
      "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
     "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", 
     "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
    );

$positions_stage = array_keys($a[19001],"Stage");
echo 'Le dernier stage du groupe 1 s\'est déroulé semaine n° ' .(end($positions_stage) +1) . '<br>';
?>

/********************

/* Exercice 3 

Extraire, dans un nouveau tableau, les codes des groupes.
*/

<?php
$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre",
 "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
     "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage",
      "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
     "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", 
     "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
    );

foreach ($a as $clefs => $valeur)
{
    $new_tab[] = $clefs;
    echo 'Groupe n° '.$clefs. '<br>';
}
foreach ($new_tab as $value)
{
    echo 'Groupe n°' .$value. '<br>';
}
?>


/*Exercice 4

Combien de semaines dure le stage du groupe 19003 ?
*/

$compteur=0
<?php
$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre",
 "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
     "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage",
      "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
     "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", 
     "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
    );
$positions_stage = array_keys($a[19003],"Stage");
echo 'le stage du groupe 3 s\'a duré pendant semaine n° ' .(count($positions_stage) +0) . '<br>';
?>

