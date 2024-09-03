<!--//todo Créer un système d'ajout de livres dans un répertoire. -->

<!--//todo 2. Créer un formulaire d'ajout de livre -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotheque</title>
    <link rel="stylesheet" href="css/style.csss">
</head>

<body>
    <form method="post">
        <input type="text" name="titre" placeholder="Titre">
        <input type="text" name="auteur" placeholder="Auteur">
        <input type="submit" value="Ajouter">
    </form>

<?php
//*Connexion à la base de donnée
$pdo = new PDO('mysql:host=localhost;dbname=mediatheque','root', 'idhjhhd', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// Vérification :
//* var_dump($pdo);

// Si le formulaire est valide :
if($_POST) {
    //! Je gère le soucis d'apostrophe :
    $titre = addslashes($_POST['titre']);
    $auteur = addslashes($_POST['auteur']);
    //* J'ajoute le livre dans la BDD :
    $pdo->exec("INSERT INTO livre (titre, auteur) VALUES ('$titre', '$auteur')");
}
?>

<table border="1">
    <tr>
        <th>Titre</th>
        <th>Auteur</th>
    </tr>


<hr>

<?php
// On affiche les éléments présents dans la table grâce à une boucle :
$stmt = $pdo->query('SELECT * FROM livre');
while($livre = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>' . '<td>' . $titre . '</td><td>' . $auteur . '</td>' . '</tr>';
}
?>

</table>
</body>
</html>