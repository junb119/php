<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <form action="login_ok.php" method="POST" id="loginForm">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="userid" id="userid" placeholder="Your id">
        <label for="userid">User Id</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="userpw" id="userpw" placeholder="userpw">
        <label for="floatingPassword">Password</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="rememberMe" >
        <label class="form-check-label" for="rememberMe">
        아이디 기억하기
        </label>
      </div> 
      <button type="submit" class="btn btn-primary">로그인</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="login_cookie.js"></script>
</body>
</html>