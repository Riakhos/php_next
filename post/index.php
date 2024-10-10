<form method="post">
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom" placeholder="Prénom" require>
    <br><br>
    <label for="description" id="description">Description</label>
    <textarea name="description" id="description" placeholder="Description" require></textarea>
    <br><br>
    <input type="submit" value="Poster" require>
</form>

<?php

// Si le formulaire a été posté j'affiche le prénom et la description :
if($_POST) {
    echo $_POST['prenom'] . '<br>' . $_POST['description'] . '<br>';
}

?>