<?php
// On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site

require 'models/login.php';


// on teste si nos variables sont définies


if(isset($_POST['login']) && $_POST['pwd']) {

    // on définit des variables pour les entrées dans le formulaire

    $login = $_POST['login'];
    $pwd = $_POST['pwd'];

    // on appelle la fonction checkId définie dans le model

    $user_data = checkId($login, $pwd);

    if($user_data != null) {

        // on la démarre :)

        session_start ();

        // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on n'utilise pas le $ pour enregistrer ces variables)

        $_SESSION['login'] = $user_data['login'];
        $_SESSION['pwd'] = $user_data['password'];
        $_SESSION['userid'] = $user_data['id'];
        

        // on redirige notre visiteur vers une page de notre section membre
        header ('location: product.php');

    }
    else {

        echo 'Ca marche po';
        // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
        // echo '<body onLoad="alert(\'Membre non reconnu...\')">';
        // puis on le redirige vers la page d'accueil
        //echo '<meta http-equiv="refresh" content="0;URL=index.php">';
    }
}
require 'views/login.php';