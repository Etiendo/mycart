<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Lire
      <?php if ($product): ?>
          <?php echo '- ' . $product['title']; ?>
      <?php endif; ?>
    </title>
  </head>
  <body>
    <?php if ($product): ?>
      <h1><?php echo $product['title']; ?></h1>
      <p><?php echo $product['description']; ?></p>
      <aside>
        <dl>
          <dt>prix :</dt>
          <dd><?php echo $product['price']; ?></dd>
          <dt>en stock :</dt>
          <dd><?php echo $product['quantity']; ?></dd>
        </dl>
      </aside>
    <?php endif; ?>
    <ul>
      <li><a href="product.php">retour à l'index</a></li>
    </ul>
  </body>
</html>
