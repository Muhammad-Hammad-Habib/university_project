  <?php
  require "checkSession.php";
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <?php include "style.php" ?>

  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

      <!-- Navbar -->
      <?php
      require "navbar.php"
      ?>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <?php
      require "sidebar.php";
      ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <br>

        <!-- Main content -->
        <?php
        require "monitor.php";
        ?>



        <!-- /.content -->
      </div>

      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.2.0
        </div>
      </footer>


    </div>
    <!-- ./wrapper -->

    <?php
    include "script.php";
    ?>

  </body>

  </html>