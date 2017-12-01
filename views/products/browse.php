  <!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Parcourir les produits</title>
    </head>
    <body>
      <h1>Les produits en stock</h1>
      <ul>
        <?php foreach ($products as $product): ?>
          <li>
            <a href="read.php?id=<?php echo $product['id']; ?>">
              <?php echo $product['title']; ?>
            </a>
            <a href="product.php?id=<?php echo $product['id']; ?>">Ajouter au panier</a>
          </li>
        <?php endforeach; ?>
      </ul>
      <a href="panier.php">Voir mon panier</a>

    </body>
  </html>
