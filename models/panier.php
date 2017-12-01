<?php

function readCart()
{
    require __DIR__.'/../config.php';

    // Définition des paramètres de la BDD

    //Requête SQL
    $sql = 'SELECT * FROM panier';

    try { //Création d'une instance PDO sous forme de fonction try
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->prepare($sql);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    if ($statement->execute(array($_SESSION['userid']))) {
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
