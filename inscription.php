<?php

require 'models/inscription.php';

if (isset($_POST["submit"])) {
    
    $username = $_POST['pseudo'];
    $userpwd = $_POST['motdepasse'];
    
    inscriptionCart($username, $userpwd);
}

require 'views/inscription.php';