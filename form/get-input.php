
<h1>get input</h1>
<?php 


  $category = $_GET['category'];
  $product_id = $_GET['productid'];
  $limit = filter_input(
    INPUT_GET,
    'limit',
    FILTER_VALIDATE_INT
  );
  $email = filter_input(
    INPUT_GET,
    'email',
    FILTER_VALIDATE_EMAIL
  );
  if ($limit === false || $email === false) {
    die();
  }
  
?>

<p>email : <?= $email ?></p>
<p>category : <?= $category ?></p>
<p>product id : <?= $product_id ?></p>
<p>limit : <?= $limit ?></p>