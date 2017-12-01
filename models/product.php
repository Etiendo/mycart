<?php

session_start();

function readAll()
{
    require __DIR__.'/../config.php';

    // Définition des paramètres de la BDD

    //Requête SQL
    $sql = 'SELECT * FROM products WHERE deleted_at IS null = ?';

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

function read($id)
{
    require __DIR__.'/../config.php';

    $sql =
        'SELECT * FROM products WHERE id=:id AND deleted_at IS NULL';

    $product = null;

    try { //Création d'une instance PDO sous forme de fonction try
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo_statement = $pdo->prepare($sql);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    if (
        $pdo_statement &&
        $pdo_statement->bindParam(':id', $id, PDO::PARAM_INT) &&
        $pdo_statement->execute()
    ) {
        $product = $pdo_statement->fetch(PDO::FETCH_ASSOC);
    }
    return $product;
}

function addProduct($id_article)
{
    require __DIR__.'/../config.php';

    try {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    try {
        $sql = 'INSERT INTO panier (id_article) VALUES (:id_article)';
        $statement = $pdo->prepare($sql);

        $statement->bindParam(':id_article', $id_article);

        if ($statement->execute()) {
            echo "Article ajouté !";
        } else {
            echo "Ajout non effectué";
        }
        return $statement;
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
}

function deleteProduct($id)
{
    require __DIR__.'/../config.php';

    try {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }


    try {
        $sql = "DELETE FROM panier WHERE id_article = '$id'";
        $statement = $pdo->prepare($sql);
        if ($statement->execute()) {
            echo "Produit supprimé !";
        } else {
            echo "Suppression échouée";
        }

        return $statement;
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
}
