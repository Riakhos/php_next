<h2>Exercice 1</h2>

<?php

// Créer une variable 'pays' qui stocker l'information France. 
$pays = 'France';
echo $pays . '<br>';
// Vérifier le type de cette variable 
echo gettype($pays) . '<br>';

// Modifier cette variable pour qu'elle stock 'Espagne' 
$pays = 'Espagne';
echo $pays . '<br>';

// Afficher la phrase 'Bienvenu en (variable pays)' 
echo 'Bienvenu en '. $pays . '.<br>';

// Créer la constance CAPITALE qui stocker 'Madrid' 
define('CAPITALE', 'Madrid');
echo CAPITALE . '<br>';

// Afficher la phrase 'La capitale du pays (variable pays) est (constante CAPITALE)'
echo 'La capitale du pays ' . $pays . ' est ' . CAPITALE . '.<br>';

// Créer une variable nbFrance qui stocker le nombre d'habitant en France (67970000) et une autre variable nbEspagne qui stockera le nombre d'habitant en Espagne (47780000) 
$nbFrance = 67970000;
$nbEspagne = 47780000;
echo $nbFrance . '<br>' . $nbEspagne .'<br>';

// Créer une condition pour comparer nbFrance et nbEspagne et afficher 'Il y a plus d'habitants en France' ou 'Il y a plus d'habitants en Espagne' 
if($nbFrance > $nbEspagne) {
    echo 'Il y a plus d\'habitants en France.' . '<br>';
} else {
    echo 'Il y a plus d\'habitants en Espagne.' . '<br>';
}

// Afficher la phrase 'En France, il y a (Différence de nombre d'habitants) d'habitants en plus qu'en Espagne' 
$difhab = $nbFrance - $nbEspagne;
echo 'En France, il y a ' . $difhab . ' d\'habitants en plus qu\'en ' . $pays . '.<br>';
// Optimiser le code
echo 'En France, il y a ' . $nbFrance - $nbEspagne . ' d\'habitants en plus qu\'en ' . $pays . '.<br>';

?>

<br><hr>

<h2>Exercice 2</h2>

<?php

// Créer une fonction habitantsFrance qui affichera 'Il y a 67970000 habitants en France' et l'exécuter :
function habitantsFrance() {
    global $nbFrance;
    echo 'Il y a ' . $nbFrance . ' habitants en France <br>';
}

habitantsFrance();

// Vérifier combien il y a de caractère dans la variable pays :
echo iconv_strlen($pays) . '<br>';

?>