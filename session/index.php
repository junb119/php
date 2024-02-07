<?php 
  session_start();
  $_SESSION['city'] = 'seoul';
  $_SESSION['gu'] = 'jongro';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>세션</title>
</head>
<body>
  <h1>Index</h1>
<p>
    <a href="index.php">index</a>
    <a href="about.php">about</a>
    <a href="logout.php">logout</a>
  </p>
  <p>
  <p>
    <?= $_SESSION['city'];?>시 <?=$_SESSION['gu'];?>구 세션이 생성되었습니다.
  </p>
  <?php 
  
    
  ?>
  <hr>
  <ul>
    <?php 
      foreach($_SESSION as $ses) {
        echo "<li>$ses</li>";
      }
      echo '<br>';
      foreach($_SESSION as $ses => $value) {
        echo "<li>{$ses} = {$value}</li>";
      }
    ?>
  </ul>
</body>
</html>