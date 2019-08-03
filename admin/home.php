<?php
session_start();
if (!isset($_SESSION['username'])) {
	echo "<script>alert('Silahkan Login Terlebih Dahulu !');location.href='../proses/login.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="../vendor/images/restaurant.png">
  <title>Admin - Lezzatoo Restaurant</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../vendor/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- /navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="home.php"><img src="../vendor/images/restaurant.png" alt="home" width="43px" height="43px"/> Lezzatoo Restaurant</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" name="exampleAccordion">
		<li class="nav-item">
          <span class="text-light">--- Main Menu</span>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="home.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">
          <a class="nav-link" href="users.php">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Users</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="News">
          <a class="nav-link" href="news.php">
            <i class="fa fa-fw fa-newspaper-o"></i>
            <span class="nav-link-text">News</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Food">
          <a class="nav-link" href="menu.php">
            <i class="fa fa-fw fa-cutlery"></i>
            <span class="nav-link-text">Food</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Front Pages">
          <a class="nav-link" href="pages.php">
            <i class="fa fa-fw fa-window-maximize"></i>
            <span class="nav-link-text">Front Pages</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Comment">
          <a class="nav-link" href="comment.php">
            <i class="fa fa-fw fa-comments"></i>
            <span class="nav-link-text">Comment</span>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="nav-link">Hello, <?php echo $_SESSION['name'];?> <img src="../vendor/images/user.jpg" alt="user-img" width="40px" class="rounded-circle"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="../index.php"><i class="fa fa-fw fa-globe"></i> Halaman Utama</a>
            <a class="dropdown-item" href="setting.php?username=<?php echo $_SESSION['username']; ?>"><i class="fa fa-fw fa-wrench"></i> Pengaturan</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../proses/proses_logout.php" onClick="return confirm('Keluar dari halaman ini ?');"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
          </div>
        </li>
      </ul>
	</div>
  </nav>
  <!-- /navigation -->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="home.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">Comments</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="comment.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-newspaper-o"></i>
              </div>
              <div class="mr-5">News</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="news.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-window-maximize"></i>
              </div>
              <div class="mr-5">Pages</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="pages.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-cutlery"></i>
              </div>
              <div class="mr-5">Foods</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="menu.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-home"></i> Welcome To Admin - Lezzatoo Restaurant</div>
        <div class="card-body">
          <p class="text-justify">Halaman ini merupakan halaman administrasi untuk mengelola data-data terkait content website lezzato restaurant. Pada bagian sebelah kiri terdapat menu-menu yang dapat diakses untuk mengelola data-data tersebut.</p>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Lezzatoo Restaurant 2017 by Group 3 Prognet</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../vendor/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../vendor/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
