<?php

// Quand on valide le formulaire, il y a une liste HTML qui apparaît pour récapituler les champs renseignés.
if($_POST) {//* J'appel le formulaire
    echo 'Inscription avec succès.<br>Voici le récapitulatif de vos informations :';
    echo '<ul>';//* Je crée la iste HTML
    echo '<li>Votre nom est ' . $_POST['name'] . '.</li>' . '<li>Votre prénom est ' . $_POST['prenom'] . '. </li>' . '<li>Votre email est ' . $_POST['email'] . '. </li>' . '<li>Votre password est ' . password_hash($_POST['password'], PASSWORD_DEFAULT) . '. </li>';//*Hachage du mot de passe (éviter d'utiliser le md5, obsolète => utiliser password_hash)
    echo '</ul>';//* Je referme la liste HTML
} else {

// Et le formulaire disparaît.
?>

<!-- Créer un formulaire d'inscription prenant en compte les champs :
    -Nom
    -Prénom
    -Adresse mail
    -Mot de passe -->
<form method="post">
    <label for="name">Nom</label>
    <input type="text" name="name" placeholder="Nom" require>
    <br><br>
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" placeholder="Prénom" require>
    <br><br>
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email" require>
    <br><br>
    <label for="password">Mot de passe</label>
    <input type="password" name="password" placeholder="Mot de passe" require> 
    <br><br>
    <input type="submit" value="S'inscrire">
</form>

<?php
//* Pour faire disparaître le formulaire lorsqu'il est rempli(intégrer le formulaire dans le else)
}
?>