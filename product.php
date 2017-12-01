<?php

// Inclusion php du fichier model.php
require __DIR__.'/models/product.php';

$products = readAll();

session_start();

if (isset($_GET['id'])) {
    $id_article = $_GET['id'];
    $product = addProduct($id_article);
}

// Inclusion de la page membre lorsque l'on se connecte
require __DIR__.'/models/page_membres.php';

// Inclusion php du fichier view.php
require __DIR__.'/views/products/browse.php';
