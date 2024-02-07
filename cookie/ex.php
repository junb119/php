<?php
// 쿠키 생성
  $cookieName = 'city';
  $cookieValue = 'seoul';
  setcookie($cookieName, $cookieValue, time() + 60);

  
  echo '<br>';
  
  
  // 쿠키 삭제
  setcookie($cookieName, $cookieValue, time() - 1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>쿠키 연습</h1>
  <h2>쿠키 출력</h2>
  <p>
    <?php
      echo "{$cookieName}라는 쿠키의 값은 {$_COOKIE[$cookieName]}입니다.";
    ?>
  </p>
</body>
</html>