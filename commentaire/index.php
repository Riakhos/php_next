<!-- //todotodo Réaliser un système de commentaire :

//todo1. Création de la base de données
	//todo Création de la table (id_commentaire, pseudo, message, date_heure_message) -->
    
<?php

// Je me connecte à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=blog_comments','root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// todo 2. Connexion à la BDD
//* var_dump($pdo);
?>

<!-- //todo 3. Création du formulaire permettant de laisser son pseudo et son message -->

<form method="post">
    <ul>
        <ol>
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" placeholder="Votre pseudo" require>
        </ol>
        <ol>
            <textarea name="message" id="message" placeholder="Votre commentaire" require></textarea>
        </ol>
        <ol>
            <input type="submit" value="Envoyer">
        </ol>
    </ul>
</form>

<?php 

//todo  4. Récupération des informations et enregistrement dans la base de données
// Si le formulaire a été posté :
if($_POST) {
    //* echo 'test'; test de l'envoie du formulaire

    //! Securité => Je gère le soucis d'apostrophe
    $_POST['message'] = addslashes($_POST['message']);
    $_POST['pseudo'] = addslashes($_POST['pseudo']);
    
    //? Enregistrement du message et du pseudo
    $pdo->exec("INSERT INTO comments (pseudo, message) VALUES ('$_POST[pseudo]', '$_POST[message]')"); 
}
//todo 5. Affichage des messages sur la page
// On affiche les messages de la base :
$r = $pdo->query('SELECT * FROM comments');
while($comments = $r->fetch(PDO::FETCH_ASSOC)) {
    echo $comments['pseudo'] . ' : ' . $comments['message'] . '<br>';
}

?>
