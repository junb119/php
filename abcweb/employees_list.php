<?php
  require_once('db.php');
  $sql = "SELECT * FROM employees ORDER BY emp_no DESC LIMIT 0,5";
  $result = $mysqli->query($sql);
  
  // $assoc = $result->fetch_assoc();
  // $arr = $result->fetch_array();
  // $obj = $result->fetch_object();

  // print_r($assoc);
  // print_r($arr);
  // print_r($obj);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>사원명부</title>
</head>
<body>
  <h1>사원명부</h1>
  <table>
    <thead>
      <tr>
        <th>사원번호</th>
        <th>사원명</th>
        <th>입사일</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while($row = $result->fetch_assoc()) {
      ?>
        <tr>
          <td><?= $row['emp_no']?></td>
          <td><a href="employee_view.php?emp_no=<?=$row['emp_no'];?>"><?= $row['name']?></a></td>
          <td><?= $row['hire_date']?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
  <P>
    <a href="employees_add.php">사업정보 입력하기</a>
  </P>
</body>
</html>
<?php
// db 연결 종료

$mysqli -> close()


?>