<html>

<head>
    <title>Formulaire d'identification</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
</head>

<header>
    <div class="container">
        <div class="row">
            <div class="col-1">
            <a href="inscription.php">Inscription</a>
            </div>
            <div class="col-3"></div>
            <div class="col-4">
                <h1 class="accueil">Accéder à mon panier</h1>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</header>

<body>
    <div class="container">
        <form action="index.php" method="post">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <label>Login<input type="text" id="utilisateur" name="login"></label>
                </div>
                <div class="col-4"></div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <label>Mot de passe<input type="password" id="motdepasse" name="pwd"></label>
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <input type="submit" value="Connexion" name="submit">
                </div>
                <div class="col-4"></div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
