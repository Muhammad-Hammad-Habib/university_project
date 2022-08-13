<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <?php include "style.php"?>

</head>

<style>
  @media (min-width: 768px) {

    body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .content-wrapper,
    body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-footer,
    body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-header {
      transition: margin-left .3s ease-in-out;
      margin-left: 0px !important;
    }
  }

  .sidebar-mini.sidebar-collapse .content-wrapper,
  .sidebar-mini.sidebar-collapse .main-footer,
  .sidebar-mini.sidebar-collapse .main-header {
    margin-left: 0px !important;
  }

  .widget-user .widget-user-image {
    left: 0%;
    top: 120px;
    margin-left: 0px;
  }

  .widget-user .widget-user-header {
    height: 240px;
  }

  .widget-user .widget-user-image>img {
    width: 150px;
  }

  .info-box .info-box-number {

    margin-top: 0px !important;
    /* line-height: 1; */
  }

  .info-box .info-box-content {
    line-height: 1.1;
  }
</style>



<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar start -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->

      <ul class="navbar-nav ml-auto">

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->

        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>

      </ul>
    </nav>
    <!-- /.navbar end -->



    <!--  Contains whole page content start -->
    <div class="content-wrapper">
      <br>
      <!-- Main content -->
      <section class="content" style="width: 85%; margin: auto;">
        <div class="container-fluid">
        
          <!-- Section one Header start -->
          <div class="row">

            <div class="col-md-12">

              <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-info"
                  style="background-image: url(dist/img/prod-1.jpg); background-position: 100%; background-size: cover ; background-repeat: no-repeat;">

                  <button style="width: 120px; position: absolute ; top: 10px; right: 10px;" type="button"
                    class="btn btn-block bg-gradient-primary btn-flat">
                    <i class="fa fa-bell"> &nbsp; </i>
                    Follow
                  </button>

                </div>
                <div class="widget-user-image" style="width: 100%;">
                  <img class="img-circle elevation-2" src="dist/img/user1-128x128.jpg" alt="User Avatar"
                    style="margin: auto; display: block;">
                </div>
                <div class="card-footer" style="padding-top: 26px;">
                  <div class="row" style="flex-wrap: inherit; padding-top: 26px;">
                    <div class="col-sm-6 border-right">
                      <div class="description-block" style="text-align: left;">
                        <h5 class="description-header">Muhammad Hammad Habib </h5>
                        <span class="description-text">Web designer</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->

                    <div class="col-sm-6">
                      <div class="description-block">
                        <h5 class="description-header">35</h5>
                        <span class="description-text">Followers</span>
                      </div>

                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
              </div>

              <!-- /.card -->
            </div>

          </div>
          <!-- Section one Header end -->
        
          <!-- section two start -->
          <div class="row">

            <!-- About , experience , education and certificate -->
            <div class="col-md-9">

              <!-- about start -->
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">
                    <h4>About</h4>
                  </h6>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti rerum similique, aperiam itaque
                    veniam nostrum placeat odio officia ipsam, temporibus unde animi voluptatum. Saepe laborum cumque,
                    optio fugiat dolore dignissimos!
                  </p>
                </div>
              </div>
              <!-- about end -->

              <!-- experience start -->
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">
                    <h4>Experience</h4>
                  </h6>

                  <!-- add block in experience -->
                  <div class="info-box">
                    <span class="info-box-icon bg-info">
                      <img src="dist/img/AdminLTELogo.png" alt=""></span>

                    <div class="info-box-content">
                      <span class="info-box-number">Web Designer</span>
                      <span class="info-box-text">H2so - Full time / hafl time </span>
                      <span class="info-box-text">Dec 2019 - Present </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- add block in experience -->
                  <div class="info-box">
                    <span class="info-box-icon bg-info">
                      <img src="dist/img/AdminLTELogo.png" alt=""></span>

                    <div class="info-box-content">
                      <span class="info-box-number">Web Designer</span>
                      <span class="info-box-text">H2so - Full time / hafl time </span>
                      <span class="info-box-text">Dec 2019 - Present </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- add block in experience -->
                  <div class="info-box">
                    <span class="info-box-icon bg-info">
                      <img src="dist/img/AdminLTELogo.png" alt=""></span>

                    <div class="info-box-content">
                      <span class="info-box-number">Web Designer</span>
                      <span class="info-box-text">H2so - Full time / hafl time </span>
                      <span class="info-box-text">Dec 2019 - Present </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- add block in experience -->
                  <div class="info-box">
                    <span class="info-box-icon bg-info">
                      <img src="dist/img/AdminLTELogo.png" alt=""></span>

                    <div class="info-box-content">
                      <span class="info-box-number">Web Designer</span>
                      <span class="info-box-text">H2so - Full time / hafl time </span>
                      <span class="info-box-text">Dec 2019 - Present </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- add block in experience -->
                  <div class="info-box">
                    <span class="info-box-icon bg-info">
                      <img src="dist/img/AdminLTELogo.png" alt=""></span>

                    <div class="info-box-content">
                      <span class="info-box-number">Web Designer</span>
                      <span class="info-box-text">H2so - Full time / hafl time </span>
                      <span class="info-box-text">Dec 2019 - Present </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                </div>
              </div>
              <!--  experience End -->

              <!-- education start -->
              <div class="card">

                <div class="card-body">
                  <h6 class="card-title">
                    <h4>Education</h4>
                  </h6>
                  <!-- add block in education -->
                  <div class="info-box">
                    <span class="info-box-icon bg-info">
                      <img src="dist/img/AdminLTELogo.png" alt=""></span>

                    <div class="info-box-content">
                      <span class="info-box-number">University of sindh</span>
                      <span class="info-box-text">Bs - Inofrmation techonology </span>
                      <span class="info-box-text">2019 - 2023 </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- add block in education -->
                  <div class="info-box">
                    <span class="info-box-icon bg-info">
                      <img src="dist/img/AdminLTELogo.png" alt=""></span>

                    <div class="info-box-content">
                      <span class="info-box-number">University of sindh</span>
                      <span class="info-box-text">Bs - Inofrmation techonology </span>
                      <span class="info-box-text">2019 - 2023 </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- add block in education -->
                  <div class="info-box">
                    <span class="info-box-icon bg-info">
                      <img src="dist/img/AdminLTELogo.png" alt=""></span>

                    <div class="info-box-content">
                      <span class="info-box-number">University of sindh</span>
                      <span class="info-box-text">Bs - Inofrmation techonology </span>
                      <span class="info-box-text">2019 - 2023 </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- add block in education -->
                  <div class="info-box">
                    <span class="info-box-icon bg-info">
                      <img src="dist/img/AdminLTELogo.png" alt=""></span>

                    <div class="info-box-content">
                      <span class="info-box-number">University of sindh</span>
                      <span class="info-box-text">Bs - Inofrmation techonology </span>
                      <span class="info-box-text">2019 - 2023 </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                </div>
              </div>
              <!-- education end -->


              <!--certificate start-->
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">
                    <h4>Certificate</h4>
                  </h6>
                  <!-- add block in certificate -->
                  <div class="info-box">
                    <span class="info-box-icon bg-info">
                      <img src="dist/img/AdminLTELogo.png" alt=""></span>

                    <div class="info-box-content">
                      <span class="info-box-number">(DCBM) diploma in com. and business management</span>
                      <span class="info-box-text">Faith college of science and techonology </span>
                      <span class="info-box-text">Issued date - 20/1/2022</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- add block in certificate -->
                  <div class="info-box">
                    <span class="info-box-icon bg-info">
                      <img src="dist/img/AdminLTELogo.png" alt=""></span>

                    <div class="info-box-content">
                      <span class="info-box-number">(DCBM) diploma in com. and business management</span>
                      <span class="info-box-text">Faith college of science and techonology </span>
                      <span class="info-box-text">Issued date - 20/1/2022</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- add block in certificate -->
                  <div class="info-box">
                    <span class="info-box-icon bg-info">
                      <img src="dist/img/AdminLTELogo.png" alt=""></span>

                    <div class="info-box-content">
                      <span class="info-box-number">(DCBM) diploma in com. and business management</span>
                      <span class="info-box-text">Faith college of science and techonology </span>
                      <span class="info-box-text">Issued date - 20/1/2022</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- add block in certificate -->
                  <div class="info-box">
                    <span class="info-box-icon bg-info">
                      <img src="dist/img/AdminLTELogo.png" alt=""></span>

                    <div class="info-box-content">
                      <span class="info-box-number">(DCBM) diploma in com. and business management</span>
                      <span class="info-box-text">Faith college of science and techonology </span>
                      <span class="info-box-text">Issued date - 20/1/2022</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- add block in certificate -->
                  <div class="info-box">
                    <span class="info-box-icon bg-info">
                      <img src="dist/img/AdminLTELogo.png" alt=""></span>

                    <div class="info-box-content">
                      <span class="info-box-number">(DCBM) diploma in com. and business management</span>
                      <span class="info-box-text">Faith college of science and techonology </span>
                      <span class="info-box-text">Issued date - 20/1/2022</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                </div>
              </div>
              <!--certificate start-->

              <!-- /.card -->
            </div>

            <!-- side columns (about me , skills and language) -->
            <div class="col-md-3">


              <!-- About Me Box start -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">About Me</h3>
                </div>

                <!-- /.card start -->
                <div class="card-body">
                  <strong>
                    <i class="fas fa-book mr-1"></i>
                    Education
                  </strong>
                  <p class="text-muted">
                    B.S. in Computer Science from the University of Tennessee at Knoxville
                  </p>
                  <hr>

                  <strong>
                    <i class="fas fa-map-marker-alt mr-1"></i>
                    Location
                  </strong>
                  <p class="text-muted">Malibu, California</p>
                  <hr>

                  <strong>
                    <i class="fas fa-pencil-alt mr-1"></i>
                    Email
                  </strong>
                  <p class="text-muted">
                    <a> Muhammadhammad0315@gmail.com</a>
                  </p>
                  <hr>

                  <strong><i class="far fa-file-alt mr-1"></i>
                    Notes
                  </strong>
                  <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim
                    neque.
                  </p>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- About Me Box end -->


              <!-- Skills list start -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">

                  <div class="text-center">
                    <b class="h3">
                      Skills
                    </b>
                  </div>
                  <br>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>HTML</b> <a class="float-right">60%</a>
                    </li>

                    <li class="list-group-item">
                      <b>CSS</b> <a class="float-right">70%</a>
                    </li>

                    <li class="list-group-item">
                      <b>Javascript</b> <a class="float-right">60%</a>
                    </li>

                    <li class="list-group-item">
                      <b>Ajax</b> <a class="float-right">50%</a>
                    </li>

                    <li class="list-group-item">
                      <b>Jquery</b> <a class="float-right">80%</a>
                    </li>

                    <li class="list-group-item">
                      <b>PHP</b> <a class="float-right">90%</a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Skills list end -->



              <!-- language list start -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">

                  <div class="text-center">
                    <b class="h3">
                      Languages
                    </b>
                  </div>

                  <br>
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>English</b>
                    </li>

                    <li class="list-group-item">
                      <b>Urdu</b>
                    </li>

                    <li class="list-group-item">
                      <b>Sindhi</b>
                    </li>
                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- language list end -->
            </div>
          </div>
          <!-- section two end  -->
          
          <hr>

          <!-- section three (Activity [images]) start -->
          <div class="row">
            <div class="col-md-12">
              <h3>
                Activity
              </h3>
            </div>

            <div class="  col-sm-6 col-md-6  col-lg-4 col-xl-3">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="dist/img/photo1.png" alt="Dist Photo 1">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Card Title</h5>
                </div>
              </div>
            </div>

            <div class=" col-sm-6 col-md-6  col-lg-4 col-xl-3">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="dist/img/photo1.png" alt="Dist Photo 1">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Card Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Illum, vero exercitationem eius eligendi dolor Title</h5>

                </div>
              </div>
            </div>

            <div class=" col-sm-6 col-md-6  col-lg-4 col-xl-3">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="dist/img/photo1.png" alt="Dist Photo 1">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Card Title</h5>

                </div>
              </div>
            </div>

            <div class=" col-sm-6 col-md-6  col-lg-4 col-xl-3">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="dist/img/photo1.png" alt="Dist Photo 1">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Card Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Illum, vero exercitationem eius eligendi dolor Title</h5>

                </div>
              </div>
            </div>

            <div class=" col-sm-6 col-md-6  col-lg-4 col-xl-3">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="dist/img/photo1.png" alt="Dist Photo 1">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Card Title</h5>

                </div>
              </div>
            </div>

            <div class=" col-sm-6 col-md-6  col-lg-4 col-xl-3">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="dist/img/photo1.png" alt="Dist Photo 1">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Card Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Illum, vero exercitationem eius eligendi dolor Title</h5>

                </div>
              </div>
            </div>

            <div class=" col-sm-6 col-md-6  col-lg-4 col-xl-3">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="dist/img/photo1.png" alt="Dist Photo 1">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Card Title</h5>

                </div>
              </div>
            </div>

            <div class=" col-sm-6 col-md-6  col-lg-4 col-xl-3">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="dist/img/photo1.png" alt="Dist Photo 1">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Card Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Illum, vero exercitationem eius eligendi dolor Title</h5>

                </div>
              </div>
            </div>

          </div>
          <!-- section three (Activity [images]) end -->

          <hr>

          <!-- section three (Projects Done [images]) start -->
          <div class="row">
            <div class="col-md-12">
              <h3>
                Projects Done
              </h3>
            </div>

            <div class=" col-sm-6 col-md-6  col-lg-4 col-xl-3">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="dist/img/photo1.png" alt="Dist Photo 1">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Card Title</h5>

                </div>
              </div>
            </div>

            <div class=" col-sm-6 col-md-6  col-lg-4 col-xl-3">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="dist/img/photo1.png" alt="Dist Photo 1">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Card Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Illum, vero exercitationem eius eligendi dolor Title</h5>

                </div>
              </div>
            </div>

            <div class=" col-sm-6 col-md-6  col-lg-4 col-xl-3">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="dist/img/photo1.png" alt="Dist Photo 1">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Card Title</h5>

                </div>
              </div>
            </div>

            <div class=" col-sm-6 col-md-6  col-lg-4 col-xl-3">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="dist/img/photo1.png" alt="Dist Photo 1">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Card Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Illum, vero exercitationem eius eligendi dolor Title</h5>

                </div>
              </div>
            </div>

            <div class=" col-sm-6 col-md-6  col-lg-4 col-xl-3">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="dist/img/photo1.png" alt="Dist Photo 1">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Card Title</h5>

                </div>
              </div>
            </div>

            <div class=" col-sm-6 col-md-6  col-lg-4 col-xl-3">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="dist/img/photo1.png" alt="Dist Photo 1">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Card Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Illum, vero exercitationem eius eligendi dolor Title</h5>

                </div>
              </div>
            </div>

            <div class=" col-sm-6 col-md-6  col-lg-4 col-xl-3">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="dist/img/photo1.png" alt="Dist Photo 1">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Card Title</h5>

                </div>
              </div>
            </div>

            <div class=" col-sm-6 col-md-6  col-lg-4 col-xl-3">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="dist/img/photo1.png" alt="Dist Photo 1">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Card Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Illum, vero exercitationem eius eligendi dolor Title</h5>

                </div>
              </div>
            </div>
          </div>
          <!-- section three (Projects Done [images]) end -->
          <hr>
        </div>

      </section>
    </div>
    <!--  Contains whole page content start -->


    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>




  </div>
  <!-- ./wrapper -->
 


  <?php 
    include "script.php";
  ?>
  
</body>

</html>