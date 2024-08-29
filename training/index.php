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

<br><hr>

<h2>Fonctions prédéfinies</h2>

<?php

$phrase = 'texte1 texte2 texte3 texte4 texte5 texte6 texte7 texte8 texte9';
echo $phrase . '<br>';

// Fonction qui permet de vopir le nombre de caractères d'une chaîne :
echo iconv_strlen($phrase) . '<br>';

// Exemple sur le nombre de caractère d'un mot de passe :
$password = 'rtzyhrzeyzrteyztytrzyz';
$nbCaractere = iconv_strlen($password);

if($nbCaractere < 10) {
    echo 'Mot de passe trop petit';
}

// Afficher le début d'une chaîne :
echo substr($phrase, 0, 27) . '...<br>';

// Afficher l'année actuelle :
echo date("l") . '<br>';

?>

<br><hr>

<h2>Fonctions Utilisateurs</h2>

<?php

// Je crée une fonction :
function bonjour() {
    echo 'Bonjour <br>';
}

// Je l'exécute :
bonjour();

// Fonction avec un paramère :
function bonjour2($x) {
    echo 'Bonjour ' . $x . '.<br>';
}

bonjour2('Richard');
bonjour2('Anisse');

// Varirable locale (qui est créée à l'intérieur d'une fonction) :
function dayWeek() {
    $day = 'mercredi <br>';
    return $day;
}

// Ca ne marche pas car la variable est dans la fonction
// dayWeek();
// echo $day;

// Ca marche car j'affiche ce que la fonction me retourne :
echo dayWeek();

$r = dayWeek();
echo $r;

// Variable globale (qui créée en dehors d'une fonction) :
$pays = 'France';

function screenPays() {
    // On va récupérer la variable dans l'espace global :
    global $pays;
    echo $pays . '<br>';
}

screenPays();

?>

<br><hr>

<h2>Structures Itératives (boucles)</h2>

<?php

// While :
$i = 0;
// J'ouvre ma boucle :
while($i <= 5) {
    echo 'Bonjour '  . $i . ' --- ';
    $i++;
}

echo '<br>';

// Refaire la même boucle sans  les '---' :
$i = 0;//* Remise à zéro de la variable
while($i <= 5) {//* Paramètre de la boucle
    if($i == 5) {//*Condition 1
        echo 'Bonjour '  . $i . '<br>';//*Résultat 1
    } else {//*Condition 2
        echo 'Bonjour '  . $i . ' --- ';//*Résultat 2
    }   
    $i++;//*Itération à chaque tour
}

$i = 0;
while($i < 5) {
    echo 'Bonjour ' . $i . ' --- ';
    $i++;
    if($i == 5) {
        echo 'Bonjour ' . $i . '.<br>';
    }
}

// FOR :
for($i = 0; $i <= 5; $i++) {
    if($i == 5) {//*Condition 1
        echo 'Tour numéro : '  . $i . '<br>' . '<br>';//*Résultat 1
    } else {//*Condition 2
        echo 'Tour numéro : '  . $i . ' --- ';//*Résultat 2
    } 
   // echo 'Tour numéro : ' . $i . ' -- ';
}

// Exercice : Faire un select qui affiche les années d'aujourd'hui à 1920 :
echo '<select>';//liste déroulante <select> avec <option>
    for($year = 2024; $year >= 1920; $year--) {
        echo '<option>' . $year . '</option>';
    }
echo'</select>' . '<br>' . '<br>';

echo '<select>';
    for($year = date('Y'); $year >= 1920; $year--) {
        echo '<option>' . $year . '</option>';
    }
echo'</select>' . '<br>' . '<br>';

// Exercice : Créer un tableau de 10 lignes (tr) et 10 colonnes (td) par ligne numérotée de 00 à 99
echo '<table border="1">';
    $num = 0;// Création d'une variable pour ordonné la numérotation
    for($row = 00; $row < 10; $row++) {// Boucle crée 10 lignes dans le tableau
        echo '<tr>';
        for($col = 00; $col < 10; $col++) {// Boucle crée 10 colonnes dans le tableau
            $formatNum = str_pad($num, 2, '0', STR_PAD_LEFT);// La fonction str_pad($num, 2, '0', STR_PAD_LEFT) formate les nombres pour qu'ils soient toujours affichés avec deux chiffres (par exemple, 00, 01, 02, ..., 99).
            echo '<td>' . $formatNum . '</td>';
            $num++;
        }
        echo '</tr>';
    }
echo '</table>';

?>

<br><hr><br>

<h2>Inclusions de fichiers</h2>

<?php

// INCLUDE :
include ('fichier.php');
include 'fichier.php';

// REQUIRE :
require ('fichier.php');

?>

<br><hr><br>

<h2>Array</h2>

<?php

// Je créé un array :
$liste = array('rouge', 'bleu', 'orange', 'jaune','rose');

// Afficher l'array :
print_r($liste);
echo '<br>';
var_dump($liste);// Plus de détails
echo '<br>' . '<br>';

// Afficher un seul élément :
echo $liste[2] . '<br>';
var_dump($liste[2]);
echo '<br>' . '<br>';

// Autre manière pour créer un array :
$tab[] = 'France';
$tab[] = 'Italie';
$tab[] = 'Esapagne';
$tab[] = 'Angleterre';
var_dump($tab);
echo  '<br>';
// --------------------------------
$test = ['France', 'Italie'];
var_dump($test);
echo '<br>' . '<br>';

// Boucle foreach pour parcourir un array :
foreach($tab as $indice => $valeur) {
    echo $indice . ' : ' . $valeur . '<br>';
}
echo '<br>';

// Fonction pour voir le nombre d'éléments dans un array :
echo count($tab) . '<br>' . '<br>';

// Tableau multidimensionnel :
$tab_multi = array(0 => array('prenom' => 'Richard', 'nom' => 'Bonnegent'), 1 => array('prenom' => 'Abdelkader', 'nom' => 'Bakouche'));
var_dump($tab_multi);
echo '<br>';

// Afficher seulement le prenom de Richard :
echo $tab_multi[0]['prenom'];

?>