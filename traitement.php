<?php
try {
    $connection = new PDO('mysql:host=localhost;dbname=etude', 'root', '');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}

// Exécution d'une requête
$query = "SELECT * FROM eleve";
$result = $connection->query($query);

// Traitement des résultats
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "Nom : " . $row['nomEleve'] . "<br>";
    echo "Prénom : " . $row['PrenomEleve'] . "<br>";
    echo "Numéro de téléphone : " . $row['numeroEleve'] . "<br>";
    echo "Email : " . $row['emailEleve'] . "<br>";
    echo "mot de passe : " . $row['motdepasslEleve'] . "<br>";
    echo "<br>";
}

// Fermeture de la connexion
$connection = null;
?>
