<!DOCTYPE html>
<html>
<head>
    <title>Catalogue WoodyToys</title>
    <style>
        table, th, td {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Catalogue WoodyToys</h1>

    <?php
    // Informations de connexion à la base de données
    $dbname = 'woodytoys';
    $dbuser = 'root';
    $dbpass = 'mypass';
    $dbhost = '172.17.0.4';

    // Connexion à la base de données
    $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (!$connect) {
        die("Connexion échouée: " . mysqli_connect_error());
    }

    // Sélection de la base de données (pas nécessaire si vous utilisez le quatrième paramètre de mysqli_connect)
    // mysqli_select_db($connect, $dbname) or die("Could not open the database '$dbname'");

    // Requête pour obtenir les produits
    $query = "SELECT id, product_name, product_price FROM products";
    $result = mysqli_query($connect, $query);
    if (!$result) {
        die("Requête échouée: " . mysqli_error($connect));
    }
    ?>

    <table>
        <tr>
            <th>Numéro de produit</th>
            <th>Descriptif</th>
            <th>Prix</th>
        </tr>

        <?php
        // Affichage des lignes du tableau
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . htmlspecialchars($row['id']) . "</td><td>" . htmlspecialchars($row['product_name']) . "</td><td>" . htmlspecialchars($row['product_price']) . "</td></tr>";
        }
        ?>

    </table>
</body>
</html>

