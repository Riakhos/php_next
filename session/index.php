<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- On appel la page CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Pade d'Accueil</title>
</head>

<?php

//*J'ouvre une session :
session_start();

//*J'enregistre des informations dans ma session :
$_SESSION['prenom'] = 'Amin';
$_SESSION['nom'] = 'HUSSEIN';

//*Je supprime  une info de ma session
unset($_SESSION['nom']);

//*Supprimer une session :
session_destroy();

?>

<body>

    <?php
    // On appel le fichier header
        include('view/header.php');
        // On appel le fichier nav
        include('view/nav.php');
    ?>

    <section>

    </section>

    <?php
    // On appel le fichier footer
        include('view/footer.php');
    ?>

    <!-- On appel le fichier javascript -->
<script src="js.script.js"></script>

</body>

</html>