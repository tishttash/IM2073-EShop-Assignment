<?php
  //include header file
  include('header_final.php');

  $item_id = $_GET['id'];
  $item_id = (int)$item_id;
  $product->updateData($item_id);

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <div class="looking-for">
      <div class="row">
        <div class="col-2">
          <h1>Your cake has been successfully bought!</h1>
          <p>Keep a look out for our confirmation email.</p>
          <a href="<?php printf('index_final.php');?>" class="btn">Okay</a>
        </div>
        <div class="col-2">
          <img src="./img/others/thankyou.png">
        </div>
      </div>
    </div>
  </div>

</body>
</html>

<?php
    //include footer file
    include('footer_final.php');
?> 