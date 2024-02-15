<?php 
  $title = 'Home';
  require_once('inc/header.php');
  // include('./inc/header1.php') 에러;

  echo $_SERVER['SERVER_NAME'];
  
?>

<p>Abc.com에 오신 것을 환영합니다!</p>
<?php 
  include('./inc/footer.php');
?>
