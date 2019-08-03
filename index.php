<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="vendor/images/restaurant.png">
    <title>Lezzatoo Restaurant</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="vendor/css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="vendor/images/restaurant.png" alt="home" width="43px" height="43px"/> Lezzatoo Restaurant</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="news.php">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="menu.php">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
      			<?php
      				session_start();
      				if (isset($_SESSION['username']) && !empty($_SESSION['username'])){ ?>
  					<li class="nav-item">
  					  <a class="nav-link" href="admin/home.php">Login as <?php echo $_SESSION['name']; ?></a>
  					</li>
      			<?php } ?>
          </ul>
        </div>
      </div>
    </nav>
    <?php
      include "proses/koneksi.php";
      $count = 0;
      $sql = mysqli_query($koneksi,"SELECT * FROM pages WHERE link='Home' ORDER BY id_page DESC");
      if ($sql->num_rows!=0) {
    ?>
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php
            while ($row = mysqli_fetch_array($sql)) {
              if ($count == 0) { ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php $count ?>" class="active"></li>
              <?php } else { ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php $count ?>"></li>
              <?php }
              $count = $count + 1;
            }
          ?>
        </ol>
        <div class="carousel-inner" role="listbox">
          <?php
            $count = 0;
            $sql2 = mysqli_query($koneksi,"SELECT * FROM pages WHERE link='Home' ORDER BY id_page DESC");
            while ($row = mysqli_fetch_array($sql2)) {
              if ($count == 0) { ?>
                <div class="carousel-item active">
              <?php } else { ?>
                <div class="carousel-item" >
              <?php } ?>
                  <?php echo $row['content']; ?>
                  <div class="carousel-caption d-none d-md-block">
                    <h3><?php echo $row['title']; ?></h3>
                    <p></p>
                  </div>
                </div>
              <?php $count = $count + 1;
            }
          ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <?php } else { ?>
      <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Home
        <small></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Home</li>
      </ol>

        <div class="text-center">
          <h1>Maaf, Content Tidak Ditemukan</h1>
        </div>
        <footer class="py-5 bg-dark fixed-bottom">
          <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Lezzatoo Restaurant 2017 by Group 3 Prognet</p>
          </div>
        </footer>
      </div>
    <?php } ?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
