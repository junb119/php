<?php
session_start();

$userid = $_POST['userid'];
$_SESSION['userid'] = $userid;




// setcookie();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>반갑습니다.</title>
</head>
<body>
  <h1>로그인 완료</h1>
  <h2><?= $userid; ?>님 반갑습니다.</h2>
  <a href="logout.php">Logout</a>
</body>
</html>