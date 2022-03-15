<?php
  //require mysql connection via DBController
  require('database_final/DBController_final.php');

  //require Product Class
  require('database_final/Product_final.php');

  //DBController object
  $db = new DBController_final();

  //Product object (dependency injection)
  $product = new Product_final($db);

  //Update object ???
  // $update = new Update($db);

  //print_r($product->getData());
?>

