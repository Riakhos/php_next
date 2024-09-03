<?php

// Je me connecte à la BDD :
$pdo = new PDO('mysql:host=localhost;dbname=users', 'root', 'hdtrdsh', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// Je vérifie :
// var_dump($pdo);

// J'ouvre la session :
session_start();

// S'il y a l'info action dans l'URL ET si l'info action est égal à deconnexion :
if (isset($_GET['action']) && $_GET['action'] == 'deconnexion') {
	session_destroy();
	header('location:index.php');
}

// Je déclare une variable qui me permettra d'afficher du contenu plus tard :
$content = '';


?>