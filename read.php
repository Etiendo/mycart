<?php

require __DIR__.'/models/product.php';

$product = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = read($id);
}

require __DIR__.'/views/products/read.php';
