<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <?php
  include "style.php";
  ?>

  <style>
    #ok{
      background-color: greenyellow;
      margin: 2px;
      color: black;
      border: 1px solid black;
      border-radius: 2px;
    }
  </style>

</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="index2.html">logo</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in</p>

        <form action="" id="checkUserForm" method="post">

          <!-- user -->
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" required placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>

          <!-- password -->
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" required placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-8">
              <p id="ok" style="display: none"></p>
            </div>
            <div class="col-4">
              <button type="submit" id="signIn" class="btn btn-primary btn-block">Sign In</button>
            </div>
          </div>
        </form>




        <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="register.html" class="text-center">Register a new membership</a>
        </p>
      </div>


    </div>
  </div>
  <!-- /.login-box -->


  <?php
  include "script.php";
  ?>
  <!-- jQuery -->
  <!-- <script src="plugins/jquery/jquery.min.js"></script> -->
  <!-- Bootstrap 4 -->
  <!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <!-- AdminLTE App -->
  <!-- <script src="dist/js/adminlte.min.js"></script> -->
</body>

</html>