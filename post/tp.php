<?php

// Quand on valide le formulaire, il y a une liste HTML qui apparait pour récapituler les champs renseignés.
if($_POST) {//* J'appel le formulaire
    echo 'Inscription avec succés.<br>Voici le récapitulatif de vos informations :';
    echo '<ul>';//* Je crée la iste HTML
    echo '<li>Votre nom est ' . $_POST['name'] . '.</li>' . '<li>Votre prénom est ' . $_POST['prenom'] . '. </li>' . '<li>Votre email est ' . $_POST['email'] . '. </li>' . '<li>Votre password est ' . password_hash($_POST['password'], PASSWORD_DEFAULT) . '. </li>';//*Hachage du mot de passe (éviter d'utiliser le md5, obsolète => utiliser password_hash)
    echo '</ul>';//* Je referme la liste HTML
} else {

// Et le formulaire disparait.
?>

<!-- Créer un formulaire d'inscription prenant en compte les champs :
    -Nom
    -Prénom
    -Adresse mail
    -Mot de passe -->
<form method="post">
    <label for="name">Nom</label>
    <input type="text" name="name" placehlider="Nom" require>
    <br><br>
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" placehlider="Prénom" require>
    <br><br>
    <label for="email">Email</label>
    <input type="email" name="email" placehlider="Email" require>
    <br><br>
    <label for="password">Mot de passe</label>
    <input type="password" name="password" placehlider="Mot de passe" require> 
    <br><br>
    <input type="submit" value="S'inscrire">
</form>

<?php
//* Pour faire disparaitre le formulaire lorsqu'il est rempli(intégrer le formulaire dans le else)
}
?>