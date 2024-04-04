<?php
  require_once('db.php');

  $emp_no = $_GET['emp_no'];
  $sql = "DELETE FROM employees WHERE emp_no = $emp_no";

  $result = $mysqli->query($sql);
  if($result) {
    echo '<script>alert("삭제되었습니다");location.href="employees_list.php"</script>';
  } else {
    echo "에러내용 : ".$sql.$mysqli->error;
  }
?>