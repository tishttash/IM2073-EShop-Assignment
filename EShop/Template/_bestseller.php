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
</head>

  <!--- Best Seller Cakes --->
  <div class="small-container">
    <h2 class="title">Our Best Sellers</h2>
    <div class="row">
      <div class="col-4">
        <a href="<?php printf('product_final.php?id=8');?>"><img src="./img/pdt/8.jpeg"></a>
          <h4>Bubble Tea</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p>90</p>
      </div>
      <div class="col-4">
        <a href="<?php printf('product_final.php?id=10');?>"><img src="./img/pdt/10.jpeg"></a>
          <h4>Strawberry Shortcake</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>58</p>
      </div>
      <div class="col-4">
        <a href="<?php printf('product_final.php?id=7');?>"><img src="./img/pdt/7.jpeg"></a>
          <h4>Mahjong Extraordinaire</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>120</p>
      </div>
    </div>
  </div>

</body>
</html>
