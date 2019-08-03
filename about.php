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
      <a class="navbar-brand" href="index.php"><img src="vendor/images/restaurant.png" alt="home" width="43px" height="43px" /> Lezzatoo Restaurant</a>
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
          if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="admin/home.php">Login as <?php echo $_SESSION['name']; ?></a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <?php
  include "proses/koneksi.php";
  $sql = mysqli_query($koneksi, "SELECT * FROM pages WHERE link='About'");
  ?>
  <div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">About
      <small></small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">About</li>
    </ol>

    <!-- Intro Content -->
    <?php if ($sql->num_rows != 0) { ?>
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="vendor/images/Cover-16.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <?php while ($row = mysqli_fetch_array($sql)) { ?>
            <h2><?php echo $row['title']; ?></h2>
            <p><?php echo $row['content']; ?></p>
          <?php } ?>
        </div>
      </div>
      <!-- /.row -->

      <!-- Team Members -->
      <h2>Our Team</h2>

      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="http://placehold.it/750x450" alt="Imam Yuliantoro">
            <div class="card-body">
              <h4 class="card-title font-weight-bold">Imam Yuliantoro</h4>
              <h6 class="card-subtitle mb-2 text-muted">back-end development</h6>
              <p class="card-text">Back-end adalah bagian belakang layar dari sebuah website. back-end yang saya pakai untuk website ini adalah PHP.</p>
            </div>
            <div class="card-footer">
              <span class="text-primary">immylntro@gmail.com</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="http://placehold.it/750x450" alt="">
            <div class="card-body">
              <h4 class="card-title font-weight-bold">Dewi Ayu</h4>
              <h6 class="card-subtitle mb-2 text-muted">Owner</h6>
              <p class="card-text">Mahasiswa Teknik Elektro Universitas Udayana 2015. Lahir di Denpasar pada tanggal 17 Juli 1997. Alamat di Jln Batu Intan VI No.4 Batubulan.</p>
            </div>
            <div class="card-footer">
              <span class="text-primary">email@email.com</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="http://placehold.it/750x450" alt="">
            <div class="card-body">
              <h4 class="card-title font-weight-bold">Achmadi Bin Zulfari</h4>
              <h6 class="card-subtitle mb-2 text-muted">Cheff</h6>
              <p class="card-text">Lulusan High chef University di Portugal pada tahun 2016,memulai karir sejak tahun 2017 di Lezzatoo Restaurant</p>
            </div>
            <div class="card-footer">
              <span class="text-primary">email@gmail.com</span>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Our Customers -->
      <h2>Our Customers</h2>
      <div class="row">
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="vendor/images/c1.jpg" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="vendor/images/c2.jpg" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="vendor/images/c3.jpg" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="vendor/images/img1.jpg" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="vendor/images/c4.jpg" alt="">
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="vendor/images/img2.jpg" alt="">
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Lezzatoo Restaurant 2017 by Group 3 Prognet</p>
      </div>
      <!-- /.container -->
    </footer>
  <?php } else { ?>
    <div class="container">
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