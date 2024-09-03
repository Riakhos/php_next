<?php

// Je me connecte à la base de données :
$pdo = new PDO('mysql:host=localhost;dbname=entreprise','root', 'tuhtzuhtzrtzryzrttzryh', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING : permet d'afficher les errerus sql
// PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8 : pour encoder les échanges avec la base en UTF8

// Vérification :
//* var_dump($pdo);

// Insertion d'un nouveau employé :
//* $pdo->exec('INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ("Alexandre", "Dupond", "m", "commercial","2024_08_30", 2000)');

// Modifier un employé :
//* $pdo->exec('UPDATE employes SET prenom = "Alex" WHERE id_employes = 991');

// Je supprime un employé :
//* $pdo->exec('DELETE FROM employes WHERE id_employes = 991');

// Afficher un employé sur la page :
// Je crée une variable pour stocker les informationsd e Stéphanie :
$stephanie = $pdo->query('SELECT * FROM employes WHERE id_employes = 990');
// Je stock dans la variable $employe, les informations stocké dans $stephanie sous forme d'array :
$employe = $stephanie->fetch(PDO::FETCH_ASSOC);

// Affiche les données employés :
print_r($employe);
echo json_encode($employe);
echo '<br>';

// Afficher le prénom et le nom de l'employé :
echo $employe['prenom'] . ' ' . $employe['nom'] . '<br>';

// Le faire avec toute la table :
$t_employes = $pdo->query('SELECT * FROM employes');

while($employe = $t_employes->fetch(PDO::FETCH_ASSOC)) {
    // print_r($employe);
    // echo json_encode($employe);
    echo $employe['prenom'] . ' ' . $employe['nom'] . '<br>';
}

?>