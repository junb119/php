<?php
  require_once('db.php');

  $emp_no = $_POST['emp_no'];
  $name = $_POST['name'];
  $hire_date   = $_POST['hire_date'];

  $sql = "INSERT INTO employees (emp_no,name,hire_date) VALUES('{$emp_no}','{$name}','{$hire_date}')";

  

  if ($mysqli->query($sql)) {
    echo "<script>alert('저장성공');location.href='employees_list.php'</script>";
  } else {
    echo "<script>alert('저장실패');history.back()</script>";
    
  }
  
  $mysqli -> close(); // 데이터베이스 값을 변수에 저장한다음 db 연결을 종료할 필요가 있음

?>