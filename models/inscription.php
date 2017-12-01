<?php

function inscriptionCart($username, $userpwd)
{
    require __DIR__.'/../config.php';

    try {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    try {
        $sql = 'INSERT INTO User (login, password) VALUES (:username, :userpwd)';

        $statement = $pdo->prepare($sql);

        $statement->bindParam(':username', $username);
        $statement->bindParam(':userpwd', $userpwd);

        if ($statement->execute()) {
            echo "Inscription effectuée !";
        } else {
            echo "Inscription non effectuée";
        }

        return $statement;
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
}
