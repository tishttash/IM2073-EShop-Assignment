<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="UTF-8">
  <title>Bakery Name</title>
  <link rel="stylesheet" href="style_final.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,600;0,800;1,400;1,600;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <?php
    //require functions_final.php file
    require('functions_final.php');
  ?>
</head>

<!--- header --->
<body>
  <!--- Header --->
  <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
        <a href="<?php printf('index_final.php');?>"><img src="./img/others/logo.png" width="125px"></a>
        </div>
        <nav>
          <ul>
            <li><a href="#middle">Our Products</a></li>
            <li><a href="#bottom">Reviews</a></li>
          </ul>
        </nav>
        <a href="cart.html>"<img src="./img/others/cart.png" width="30px" height="30px"></a>
      </div>
    </div>
  <div>

</body>
</html>
