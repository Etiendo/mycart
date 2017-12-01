<?php

require __DIR__.'/models/panier.php';
require __DIR__.'/models/product.php';

$articles = readCart();
$products = [];

  foreach ($articles as $article) {
      $products[] = read($article['id_article']);
  }
$articles = $products;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteProduct($id);
}

require __DIR__.'/views/products/panier.php';
