<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>사원정보 입력</title>
</head>
<body>
  <h1>사원정보 입력</h1>
  <form action="insert.php" method="POST">
    <div>
      <label for="emp_no">사원번호</label>
      <input type="text" id="emp_no" name="emp_no" placeholder="사원번호" required>
    </div>
    <div>
      <label for="name">사원명</label>
      <input type="text" id="name" name="name" placeholder="사원명" required>
    </div>
    <div>
      <label for="hire_date">입사일</label>
      <input type="date" id="hire_date" name="hire_date" >
    </div>
    <button>입력</button>
  </form>
</body>
</html>