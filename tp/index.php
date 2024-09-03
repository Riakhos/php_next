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
    <hr>
    <form method="post">
        <ul>
            <ol>
                <input type="text" name="title" placeholder="Title" required><br><br>
            </ol>
            <ol>            
                <input type="text" name="name_author" placeholder="Name of Author" required><br><br>
            </ol>
            <ol>                
                <input type="text" name="firstname_author" placeholder="Firstname of Author" required><br><br>
            </ol>
            <ol>                
                <input type="date" name="date_birthday" placeholder="Birthday of Author" required><br><br>
            </ol>
            <ol>                   
                <input type="text" name="city_birthday" placeholder="City of Author" required><br><br>
            </ol>
            <ol>                    
                <input type="text" name="editor" placeholder="Editor" required><br><br>
            </ol>
            <ol>
                <input type="number" name="publish" 
               min="0" max="2250" placeholder="Published of Date" required><br><br>
            </ol>            
            <ol>            
                <input type="text" name="category" placeholder="Categories of Book (separated by commas) " required><br><br>
            </ol>
            <ol>                                
                <textarea name="descriptif" id="descriptif" placeholder="Descriptif of Book" required></textarea><br><br>
            </ol>
            <ol>
                <input type="submit" value="Add Book"><br><br>
            </ol>
        </ul>
    </form>
    <hr>    

<?php
//*Connexion à la base de donnée
$servername = "localhost";
$username = "root";
$password = "trtrzst";
$dbname = "bibliotheque";

$conn = new mysqli($servername, $username, $password, $dbname);

//* Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//todo 3. On enregistre en base les livres ajoutés
//*Récupération des données du formulaire
if(isset($_post)) {
    $title = addslashes($_POST['title']);
    $name = addslashes($_POST['name_author']);
    $firstname = addslashes($_POST['firstname_author']);
    $date = addslashes($_POST['date_birthday']);
    $city = addslashes($_POST['city_birthday']);
    $editor = addslashes($_POST['editor']);
    $publish = addslashes($_POST['publish']);
    $categories = addslashes($_POST['category']);
    //* Sépare les catégories par une virgule
    $descriptif = addslashes($_POST['descriptif']);
} else {
    $title = "";
    $name = "";
    $firstname = "";
    $date = "";
    $city = "";
    $editor = "";
    $publish = "";
    $categories = "";
    $descriptif = "";
}

//*Insertion ou récupération de l'auteur
//Création de la requêtye avec un placeholder
$sql = "SELECT id_author FROM author WHERE name_author = ?";
//? ON récupère la colonne id_author depuis la table author
$stmt = $conn->prepare($sql);
//? ON prépare la requête SQL pour une exécution sécurisée
$stmt->bind_param("s", $name);
//? On associe les paramètres à la requête préparée
$stmt->execute();
$result = $stmt->get_result();
//? On récupère les  résultats de la requête

//*Vérification de la requête
if ($result->num_rows > 0) {
    //? On vérifie si la requête a retourné au moins une ligne
    $row = $result->fetch_assoc();
    //? On récupère la prochaine ligne du résultat sous forme de tableau associatif
    $id_author = $row['id_author'];
    //? On utilise cet ID pour d'autres opérations dans le script
} else {
    $sql = "INSERT INTO author (name_author, firstname_author, date_birthday, city_birthday) VALUES (?, ?, ?, ?)";
    //? Les points d'interrogation sont des placeholders (emplacements) dans la requête préparée où les variables seront injectées de manière sécurisée.
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $firstname, $date, $city);
    //? Lie variables de type chaîne (s) aux emplacements respectifs dans la requête SQL
    $stmt->execute();
    $id_author = $stmt->insert_id;
}

//* Vérification préalable pour éviter les doublons
$check_sql = "SELECT COUNT(*) FROM book WHERE title = ?";
//? ON récupère la somme de la colonne title depuis la table book
$check_stmt = $conn->prepare($check_sql);
//? ON prépare la requête SQL pour une exécution sécurisée
$check_stmt->bind_param("s", $title);
//? On associe les paramètres à la requête préparée
$check_stmt->execute();
$check_stmt->bind_result($count);
//? On récupère les  résultats de la requête
$check_stmt->fetch();
//? Fermez la première instruction : Cela libère les ressources associées à l'instruction préparée
$check_stmt->close();

if($count == 0) {
    //* Insertion du livre
    $sql = "INSERT INTO book (title, descriptif, date_partition, name_editor, id_author) VALUES (?, ?, ?, ?, ?)";
    //? Les points d'interrogation sont des placeholders (emplacements) dans la requête préparée où les variables seront injectées de manière sécurisée.
    $stmt = $conn->prepare($sql);
    //? ON prépare la requête SQL pour une exécution sécurisée
    $stmt->bind_param("ssssi", $title, $descriptif, $publish, $editor, $id_author);
    //? Lie les variables de type chaîne (s) et celle de type (i) aux emplacements respectifs dans la requête SQL
    $stmt->execute();
    $id_book = $stmt->insert_id;
} else {
    echo "Le livre exixte déjà dans la base de données.";
}

//* Conversion en tableau
$categories_array = explode(',', $categories);

//* Insertion des catégories et des relations avec le livre
foreach ($categories_array as $category_name) {
    //? Cette boucle itère sur chaque élément du tableau $categories, en assignant chaque élément à la variable $category_name
    $category_name = trim($category_name);
    //? La fonction trim() supprime les espaces blancs (ou autres caractères spécifiés) au début et à la fin de $category_name

    //* Insertion ou récupération de la catégorie
    $sql = "SELECT id_category FROM category WHERE name_category = ?";
    //? On récupère l'id_category de la catégorie dont le nom = name_category
    $stmt = $conn->prepare($sql);
    //? ON prépare la requête SQL pour une exécution sécurisée
    $stmt->bind_param("s", $category_name);
    //? On associe les paramètres à la requête préparée
    $stmt->execute();
    $result = $stmt->get_result();
    //? On récupère les  résultats de la requête

    //*Vérification de la requête
    if ($result->num_rows > 0) {
        //? On vérifie si la requête a retourné au moins une ligne
        $row = $result->fetch_assoc();
        //? On récupère la prochaine ligne du résultat sous forme de tableau associatif
        $id_category = $row['id_category'];
        //? On utilise cet ID pour d'autres opérations dans le script
    } else {
        $sql = "INSERT INTO category (name_category) VALUES (?)";
        //? Sécurité => placeholder pour les variables
        $stmt = $conn->prepare($sql);
        //? ON prépare la requête SQL pour une exécution sécurisée
        $stmt->bind_param("s", $category_name);
        //? Lie la variable de type chaîne (s) à son emplacements dans la requête SQL
        $stmt->execute();
        $id_category = $stmt->insert_id;
    }

    //* Insertion dans la table intermédiaire book_category
    $sql = "INSERT INTO book_category (id_book, id_category) VALUES (?, ?)";
    //? Insertion d'une association entre un livre et une catégorie
    $stmt = $conn->prepare($sql);
    //? ON prépare la requête SQL pour une exécution sécurisée
    $stmt->bind_param("ii", $id_book, $id_category);
    //? On associe les paramètres à la requête préparée
    $stmt->execute();
}

?>

<!--//todo 4. On affiche un tableau HTML qui récapitule les livres en base -->
    <table border="1">
        <!--//* Titre du tableau -->
        <caption>List Books</caption>
        <!--//* Entête du tableau -->
        <thead>
            <tr>
                <th>Title of Book</th>
                <th>Firstname of Author</th>
                <th>Name of Author</th>
                <th>Date of Published</th>
                <th>Category of Book</th>
            </tr>
        </thead>
        <!--//* Cellules du tableau -->
        <tbody>
            <?php
                //*Récupération des livres dans la base de données
                $sql = 'SELECT * FROM book JOIN author ON book.id_author = author.id_author JOIN book_category ON book.id_book = book_category.id_book JOIN category ON book_category.id_category = category.id_category';
                $result = $conn->query($sql); 
                              
                //*Affiche chaque livre dans un tableau
                if ($result->num_rows > 0) {
                    //* Sortir les données de chaque ligne
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['title'] . "</td>";
                        echo "<td>" . $row['firstname_author'] . "</td>";
                        echo "<td>" . $row['name_author'] . "</td>";
                        echo "<td>" . $row['date_partition'] . "</td>";
                        echo "<td>" . $row['name_category'] . "</td>";
                        echo "</tr>";
                    }
                }

                //* Fermeture de la connexion
                $stmt->close();
                $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
