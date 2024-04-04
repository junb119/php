<?php
require_once('db.php');

$emp_no = $_GET['emp_no'];
$sql = "SELECT * FROM employees WHERE emp_no=$emp_no";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>사원정보 수정</title>
</head>
<body>
  <h1>사원정보 수정</h1>
  <form action="edit_insert.php" method="POST">
    <div>
      <label for="emp_no">사원번호</label>
      <input type="hidden" name="emp_no" value="<?= $row['emp_no']?>">
      <input type="text" id="emp_no" name="emp_no" placeholder="사원번호" value="<?= $row['emp_no']?>" readonly disabled required>
    </div>
    <div>
      <label for="name">사원명</label>
      <input type="text" id="name" name="name" placeholder="사원명" value="<?= $row['name']?>" required>
    </div>
    <div>
      <label for="hire_date">입사일</label>
      <input type="date" id="hire_date" name="hire_date" value="<?= $row['hire_date']?>" >
    </div>
    <button>수정</button>
  </form>
</body>
</html>