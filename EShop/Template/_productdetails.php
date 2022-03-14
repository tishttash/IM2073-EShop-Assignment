<?php
  $item_id = $_GET['id']??1;
  foreach($product->getData() as $item):
    if($item['id'] == $item_id):
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

  <!--- Single Product Details --->
  <div class="small-container single-product">
    <div class="row">
      <div class="col-2">
        <img src="<?php echo $item['image']??"./img/pdt/1.jpeg";?>" width="100%">
      </div>
      <div class="col-2">
        <!-- <p>Home / All Cakes</p> -->
        <h1><?php echo $item['name']??"Unknown";?></h1>
        <h4><?php echo $item['cost']??0;?></h4>
        <select>
          <option>Select Flavour</option>
          <option>Chocolate</option>
          <option>Vanilla</option>
          <option>Earl Grey</option>
          <option>Red Velvet</option>
        </select>
        <a href="<?php printf('thankyou.php');?>"class="btn">Buy Now</a>
        <h3>Cake Details <i class="fa fa-indent"></i></h3>
        <br>
        <p>A simple yet elegant cake to remind your loved one of Japan's wonders!</p>
      </div>
    </div>
  </div>

</body>
</html>


<?php
  endif;
  endforeach;
?>
