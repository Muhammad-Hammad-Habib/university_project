<?php 
  require "panelFunction/php/oppDb.php";
  $db = new oppDb();
  $user_id = $_SESSION["user_id"];
  echo $user_id;
  $res = $db->select("user_account","*" , NULL, " Uid = ". $user_id,NULL);
  print_r($res);


?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block" style="text-transform: capitalize;">
              <?php
                echo $res[0]['full_name'];
              ?>
            </a>
          </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-header">EXAMPLES</li>

            <li class="nav-item">
              <a href="../pages/gallery.html" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="../pages/gallery.html" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Gallery
                </p>
              </a>
            </li>


         

            <li class="nav-item">
              <a href="PanelFunction/php/signOut.php" class="nav-link">
                <!-- <i class="nav-icon far fa-image"></i> -->
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
              </a>
            </li>









            <li class="nav-header">MISCELLANEOUS</li>




          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
