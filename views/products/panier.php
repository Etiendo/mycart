<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Parcourir mon panier</title>
</head>

<body>
  <h1>Mon panier</h1>
  <table>
    <tr>
    <th>Article</th>
    <th>Prix (€)</th>
    <th>Quantité</th>
  </tr>
  <tr>
    <?php foreach ($products as $article): ?>
    <td><a href="read.php?id=<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a></td>
    <td><?php echo $article['price']; ?></td>
    <td><?php echo $article['quantity']; ?></td>
    <td><a href="panier.php">+ 1<a/></td>
    <td><a href="panier.php">- 1<a/></td>
    <td><a href="panier.php?id=<?php echo $article['id']; ?>">Supprimer du panier<a/></td>
  </tr>
      <?php endforeach ;?>
  </table>
<br><br>
<a href="product.php">Retour aux articles</a>
</body>

</html>
