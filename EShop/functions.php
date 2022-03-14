<?php
  //require mysql connection
  require('database/DBController.php');

  //require Product Class
  require('database/Product.php');

  //DBController object
  $db = new DBController();

  //Product object (dependency injection)
  $product = new Product($db);

  //Update object ???
  // $update = new Update($db)

  print_r($product->getData());
?>

