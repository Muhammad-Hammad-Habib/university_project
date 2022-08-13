<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>


  <?php
  include "style.php"
  ?>

  <style>
    input.form-control {
      order: 1;
    }

    div.input-group-append {
      order: 2;
    }

    .error {
      order: 3;
      width: 100%;
      color: red;
      margin-bottom: 0px;
      padding-left: 10px;
    }

    .hilighty {
      border-bottom: 1px solid red;
      border-left: 1px solid red;
    }

    #done {
      background-color: greenyellow;
      margin: 2px;
      color: black;
      border: 1px solid black;
      border-radius: 2px;
    }
  </style>

</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <b>logo</b>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Create Profile </p>

        <form action="" id="createAccount" method="post">
          <!-- input Full name -->
          <div class="input-group mb-3">
            <input type="text" name="full_name" class="form-control" placeholder="Full name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <!-- email  -->
          <div class="input-group mb-3">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <!-- password  -->
          <div class="input-group mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <!-- retype pass.  -->
          <div class="input-group mb-3">
            <input type="password" name="confirmPassword" class="form-control" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>




          <!-- Button create  -->

          <div class="row">
            <div class="col-8">
              <p id="done" style="display: none"></p>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <div class="social-auth-links text-center" style="width: 100px; margin: 0px; ">
                <button type="submit" id="create" class="btn btn-primary btn-block">Create</button>
              </div>
            </div>
            <!-- /.col -->
          </div>





        </form>

        <a href="login.html" class="text-center">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <?php
  include "script.php";
  ?>


</body>

</html>