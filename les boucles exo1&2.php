/* 
PHP 03 - Les boucles



Exercice 1

Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...
*/


<!DOCTYPE html>
<html>
<body>

<?php
for ($number=1;$number<=150;$number++){
echo"$number";
echo"<br/>";
$number++;
}
?>


</body>
</html>



/*
Exercice 2

    Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers.
*/

<!DOCTYPE html>
<html>
<body>

<?php

echo str_repeat("Je dois faire des sauvegardes régulières de mes fichiers",500);
echo "<br>";


?>

</body>
</html>


/*
