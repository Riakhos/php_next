<h1>Page 2</h1>
<a href="index.php">Index</a>
<br><hr><br>
<?php

// S'il y a des infos dans l'URL
if(isset($_GET['produit']) && isset($_GET['couleur']) && isset($_GET['prix'])) {
    // Sans le isset il faut recharger la page depuis l'index
    echo $_GET['produit'] . '<br>';
    echo $_GET['couleur'] . '<br>';
    echo $_GET['prix'] . '<br>' . '<br>';
}

echo '<hr><br>';

//  Afficher la phrase :
// 'Vous avez choisi le ... de couleur ... au prix ...€'
if(isset($_GET['produit']) && isset($_GET['couleur']) && isset($_GET['prix'])) {
    echo 'Vous avez choisi le ' . $_GET['produit'] . ' de couleur ' . $_GET['couleur'] . ' au prix de ' . $_GET['prix'] . '€. <br>';
} else {
// S'il n'y a pas d'info dans l'URL, on affiche la phrase :
// 'Aucun produit sélectionné'
    echo 'Aucun produit sélectionné.';
}
 
?>