<h2>Affichage</h2>
<!-- Commentaire HTML -->

<?php
//Ouverture du PHP

// Commentaire d'une seule ligne
/* Commentaire de plusieurs lignes */

// J'affiche la chaîne de caractère Bonjour :
echo 'Bonjour,';

// On peut écrire du HTML :
echo '<br>';
echo 'Bienvenue!';

// Fermeture du PHP 
?>

<p>Voici du texte</p>

<?php
// Nouvelle zone de PHP
?>

<hr>

<h2>Variables : types, déclaration, affectation</h2>

<?php

// Créer une variable :
$prenom = 'Richard';
// J'affiche la valeur de la variable
echo $prenom;
echo '<br>';
echo gettype($prenom);
echo '<br>';

$a = 127;
// Vérifie le type de la variable $a
echo gettype($a);
echo '<br>';

$b = 1.5;
echo gettype($b);
echo '<br>';

$c = ' du texte';
echo gettype($c);
echo '<br>';

$d = '127';
echo gettype($d);
echo '<br>';

$e = TRUE;
echo gettype($e);
echo '<br>';

// On peut modifier la valeur d'une variable :
$prenom = 'Amin';
echo $prenom;
echo '<br>';
echo gettype($prenom);
echo '<br>';

?>
<br><hr>

<h2>Concaténation</h2>
<!-- Assembler des valeurs -->
<?php

// On peut afficher plusieurs chaînes de caractères dans une seule instruction echo grâce à la concaténation :
echo 'Bonjour,' . 'tous le monde';
echo '<br>';
echo 'Bonjour' . $prenom . ', comment ça va?' . '<br>' . $a . '<br>' . $b . '<br>' . $c . ', ' . $d . '<br>' . $e;
echo '<br>';

// Ajouter une valeur à une variable
$prenom = 'Abdelkader';
$prenom .= ' Babouche';
echo $prenom;
echo '<br>';

?>

<br><hr>

<h2>Guillemets et Quotes</h2>

<?php

$message1 = "aujourd'hui";
$message2 = 'aujourd\'hui';

echo $message1 . '<br>' . $message2 . '<br>';

// Dans des guillemets la variable est interprêtée :
echo "Bonjour comment ça va $message1 <br>";
// Dans des quotes la variable n'est pas interprêtée :
echo 'Bonjour comment ça va $message1 <br>';
// Il faut concaténer :
echo 'Bonjour comment ça va ' . $message1 . '? <br>';

?>

<br><hr>

<h2>Constantes</h2>

<?php

// Définir une constante :
define('CAPITALE','Paris');
// On l'affiche
echo CAPITALE . '<br>';

// On ne peut pas modifier une constante :
// define('CAPITALE', 'Lyon');
// echo CAPITALE . '<br>';

echo '<br>';

// Constantes prédéfines :
echo __DIR__;
echo '<br>';
echo __FILE__;
echo '<br>';

echo '<br>';

?>

<br><hr>

<h2>Opérateurs Arithméttiques</h2>

<?php

$a = 10;
$b = 2;

// Nous pouvons faire des opérations en PHP :
echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';

// On peut ajouter une valeur dans une variable :
$a += $b;
echo $a;
echo '<br>';

?>

<br><hr>

<h2>Structures conditionnelles</h2>

<?php

$a = 10;
$b = 5;
$c = 2;

// Si a est supérieur à b alors j'affiche du texte :
if($a > $b){
    // Tout le code entre les acolades est exécuté uniquement si la condition est valide :
    echo 'A est bien supérieur à B <br>';
} else {
    echo 'B est supérieur à A <br>';        
}

// ET (les deux conditions doivent être valides):
// Si A est supérieur à B et si B est supérieur à C :
if($a > $b && $b > $c) {
    echo 'A est bien supérieur à B et B est supérieur à C <br>';
}

// On peut mettre une condition  dans une condition :
if($a > $b) {
    echo 'Première condition valide <br>';
    if($b > $c) {
        echo 'Deuxièmle condition valide <br>';
    }
}

// OU (une seule des deux conditions minimums suffit pour rendre la condition valide) :
// Si A est égal à 9 ou alors si B est supérieur à C :
if($a == 9 || $b > $c) {
    echo 'A est égal à 9 ou alors si B est supérieur à C <br>';
}

// Condition exclusive (une seule des deux conditions doit être valide) :
// Si A est égal à 10 oou B supe=érieur à C :
if($a == 10 XOR $b > $c) {
    echo 'A est égal à 10 ou B est supérieur à C <br>';
}

// Si A est égal à 8
// Sinon si A est différent de 10 
// Sinon...
if($a == 8) {
    echo 'A est égal à 8 <br>';
} else if($a != 10){
    echo 'A est différent de 10<br>';
} else {
    echo 'Condition par défaut <br>';
}

// Vérifier l'existance d'une variable :
$var = 'qqchose';
// Si la variable $var existe :
if(isset($var)) {
    echo 'oui <br>';
} else {
    echo 'non <br>';
}

// Différence entre le double égal et le triple égal :
$vara = 1;
$varb = '1';
// Est-ce que $vara à la même valeur que $varb ?
if($vara == $varb) {
    echo 'Les variables ont la même valeur <br>';
}

// Est-ce que $vara à la même valeur et le même type que $varb ?
if($vara === $varb) {
    echo 'Les variables ont la même valeur et le même type <br>';
} else {
    echo 'Les variables ne correspondent pas <br>';
}

// = Donner une valeur à une variable
// == Comparer les valeur
// === Comparer les valeurs et le type

// Condition Switch :
$couleur = 'jaune';
// Je vérifie la valeur de $couleur :
switch($couleur) {
    // 1er cas : Si c'est du bleu
    case 'bleu' :
        echo 'Vous aimez le bleu <br>';
    break;
    // 2ème cas :
    case 'rouge';
        echo 'Vous aimez le rouge <br>';
    break;
    // 3ème cas :
    case 'vert';
        echo 'Vous aimez le vert <br>';
    break;
    // 4ème cas :
    case 'jaune';
        echo 'Vous aimez le jaune <br>';
    break;
    // Cas par défaut :
    default :
        echo "Vous n'aimez pas les couleurs testées <br>";
    break;
}

?>
