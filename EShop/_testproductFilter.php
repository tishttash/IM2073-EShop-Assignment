<?php
    //include header files
    include('header_final.php');
    include('Template/_lookingfor.php');
?> 

<?php
  $product_shuffle = $product->getData();
?>

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
<body>

  <!--- All Cakes --->
  <div id="middle" class="small-container">
    <div class="row row-2">
      <h2 class="title">Our Products</h2>
    </div>

    <!--- Filter --->
    <div class="filter-row">
      <div class="filters">
        <ul id="filter-list">
          <li class="filter" data-filter="all">All Cakes</li>
          <li class="filter active" data-filter="1">Floral Cakes</li>
          <li class="filter" data-filter="2">Simple Cakes</li>
          <li class="filter" data-filter="3">Galaxy Cakes</li>
          <li class="filter" data-filter="4">Local Cakes</li>
          <li class="filter" data-filter="5">Fruity Cakes</li>
        </ul>
      </div>
    </div>

    <div class="all-rows">
      <ul class="all-cakes">
        <div class="row">
          <?php foreach($product_shuffle as $item) { ?>
            <div class="col-4" data-category="<?php echo $item['filter'];?>">
              <a href="<?php printf('%s?id=%s','product_final.php',$item['id']);?>"><img src="<?php echo $item['image']??"./img/pdt/1.jpeg";?>"></a>
              <h4><?php echo $item['name']??"Unknown";?></h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p><?php echo $item['cost']??"0";?></p>
            </div>
          <?php } //close foreach function ?>
        </div>
      </ul>
    </div>
  </div>

  <script src="./js/jquery-3.3.1.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/jquery.filterizr.min.js"></script>
  <script src="./js/script.js"></script>

</body>
</html>
