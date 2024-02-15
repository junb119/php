<?php 
  $title = 'Login';
  include('./inc/header.php');
  include('config.php');
  include('./inc/function.php');


  if(user_is_authenticated()){
    redirect('adm/index.php');
    die();
  }


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password =$_POST['password'];

    // 관리자 인증
    if (authenticate_user($email, $password)) {
      $_SESSION['email'] = $email;
      //페이지 이동 함수 header('Location:주소');
      redirect('./adm/index.php'); // header('Location:주소')사용한 커스텀 페이지이동함수
    } else {
      $status = '관리자 정보를 다시 확인하세요';
      
    }


    if ($email === false) {
      $status = '이메일 형식으로 입력하세요!';
    }
    output($_POST);
  }  

  // echo '<p>'.$_SERVER['HTTP_USER_AGENT'].'</p>'; // 접속 브라우저
  // echo '<p>'.$_SERVER['SERVER_NAME'].'</p>'; // localhost , abc.com
  // echo '<p>'.$_SERVER['REQUEST_URI'].'</p>'; // /abc/login.php?query="로그인"
  // echo '<p>'.$_SERVER['PHP_SELF'].'</p>'; // /abc/login.php/
?>

<h2>Login</h2>
<p>로그인해주세요</p>
<form action="" method="POST" novalidate >
  <p>
    <label for="email">Email : </label>
    <input type="email" name="email" id="email">
  </p>
  <p>
    <label for="password">Password : </label>
    <input type="password" name="password" id="password">
  </p>
  <button>로그인</button>
</form>
<div class="error">
  <?php
    if(isset($status)) {
      echo $status;
    }
  ?>
<?php 
  include('inc/footer.php')
?>