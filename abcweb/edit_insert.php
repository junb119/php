<?php
  require_once('db.php');

  $emp_no = $_POST['emp_no'];
  $name = $_POST['name'];
  $hire_date   = $_POST['hire_date'];

  $sql = "UPDATE employees SET name='{$name}', hire_date='{$hire_date}' WHERE emp_no = $emp_no";
  echo $sql;  


  if ($mysqli->query($sql)) {
    echo "<script>alert('수정성공');location.href='employees_list.php'</script>";
  } else {
    echo "<script>alert('수정실패');history.back()</script>";
    
  }

  $mysqli -> close(); // 데이터베이스 값을 변수에 저장한다음 db 연결을 종료할 필요가 있음

?>