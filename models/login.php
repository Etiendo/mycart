<?php

function checkId($login, $pwd) {

    require 'config.php';

    try
    {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();  
    }

    if(isset($login, $pwd)) {
        
        $sql = ("SELECT * FROM User WHERE login = '$login' AND password = '$pwd'");

        $statement = $pdo->prepare($sql);

        $statement->execute();

        $user_data = $statement->fetch();
        return $user_data;

        // si les variables sont vérifiées, tout est ok, on peut démarrer notre session
    }
    return null;

}