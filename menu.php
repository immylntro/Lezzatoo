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

    <!-- Page Content -->
    <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Our Menu
        <small></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Menu</li>
      </ol>
    	<?php
    	include "proses/koneksi.php";
      $limit = 6;
      $page = isset ($_GET['page']) ? (int) $_GET['page'] : 1;
      if (empty($page)) {
        $posisi = 0;
        $halaman = 1;
      } else {
        $posisi = ($page-1) * $limit;
      }
    	$sql = mysqli_query($koneksi,"SELECT * FROM food LIMIT $posisi, $limit");
      ?>
      <div class="row">
        <?php if ($sql->num_rows!=0) {
          while ($row = mysqli_fetch_array($sql)) {
        ?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">
                <h2 class="font-weight-bold text-primary"><?php echo $row['name']; ?><h4 class="text-success">Harga : Rp. <?php echo $row['price']; ?></h4></h2>
              </h4>
              <p class="card-text"><?php echo $row['content']; ?></p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <?php
        $sql2 = mysqli_query($koneksi,"SELECT * FROM food");
        $total = mysqli_num_rows($sql2);
        $pages = ceil($total/$limit);
      ?>

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <?php
          if ($page == 1) {
        ?>
        <li class="page-item disabled">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <?php } else {
          $previous = ($page > 1)?$page - 1 : 1;
        ?>
        <li class="page-item">
          <a class="page-link" href="?page=<?php echo $previous ?>" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <?php }
          for ($i=1; $i <=$pages ; $i++) {
            if ($page == $i) { ?>
        <li class="page-item active">
            <span class="page-link">
              <?php echo $i ?><span class="sr-only">(current)</span>
            </span>
        </li>
        <?php } else { ?>
        <li class="page-item">
            <a class="page-link" href="?page=<?php echo $i ?>"><?php echo $i ?></a>
        </li>
        <?php }
          }
          if ($page == $pages) {
        ?>
        <li class="page-item disabled">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
        <?php } else {
          $next = ($page < $pages)?$page + 1 : $total;
        ?>
        <li class="page-item">
          <a class="page-link" href="?page=<?php echo $next ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
        <?php } ?>
      </ul>
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
