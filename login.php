<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WAMUZAH | Store</title>
  <link rel="icon" type="image/x-icon" href="assets/images/a2.jpg" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <script language="JavaScript">
        function Login(){ 
          let uname = document.getElementById("username").value;
            let pw = document.getElementById("password").value;

            if(uname != "wamuzah" || pw != "wamuzah123") {
                alert("Username atau Password yang anda masukan salah!")
            }else{
                document.getElementById("login").href = `index.php`
            }
        }
  </script>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Login WAMUZAH Store</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input id="username" type="text" name="username" class="form-control" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="password" type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
          <a id="login" class="btn btn-primary btn-block" onclick="Login()">Sign In</a>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
      <a href="register.php"
        onclick="if(!confirm('Silahkan Register Ulang!!!')) {return false}"
        >I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Register user</a>
      </p>
    </div>
  </div>



<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>

</body>
</html>