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
      <h1 class="mt-4 mb-3">Recent News
        <small></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">News</li>
      </ol>
    	<?php
      require_once("proses/connection.inc.php");
      require_once("proses/pagination_class.php");
      $batas = 3;
      $hal = @$_GET['page'];
      if(isset($hal) && !empty($hal)){
        $posisi = ($hal-1) * $batas;
      }else{
        $posisi = 0;
        $hal = 1;
      }
      $cari = @$_GET['search'];
    	$str = "SELECT news.*, users.name FROM news INNER JOIN users USING(username) WHERE status = 'Publish' AND content LIKE '%$cari%' ORDER BY created DESC";
      $sort = false;
			$obj = new Pagination($mysqli,$str,$posisi,$batas,$hal,$sort);
      $result = $obj->result;
      if ($result->num_rows!=0) {
      ?>
      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
          <?php if ($cari) { ?>
            <h1 class="my-4">
            <small>Hasil Pencarian "<?php echo $_GET['search']; ?>"</small>
            </h1>
          <?php  } ?>

          <?php while ($row = $result->fetch_object()) {
						$time = strtotime($row->created);
						$format = date("l, d F Y g:i:s A", $time);
          ?>

          <!-- Blog Post -->
          <div class="card my-4">

            <div class="card-body">

              <h2 class="card-title"><?php echo $row->title; ?></h2>
              <p class="card-text">
							<?php
								$isi_post = html_entity_decode($row->content);
								$isi = substr($isi_post,0,600);
								$isi = substr($isi_post,0,strrpos($isi," "));
								echo $isi." ...";
							?>
              </p>
              <a href="detail_news.php?id_news=<?php echo  $row->id_news; ?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo $format; ?> by
              <?php echo $row->name; ?>
            </div>
          </div>
          <?php } ?>

          <!-- Pagination -->
          <?php echo $obj->anchors; ?>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <form method="GET" action="news.php">
                <div class="input-group">
                  <input type="text" id="myInput" name="search" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit">Go!</button>
                  </span>
                </div>
              </form>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <div class="card-body">
              <div style="width:100%;height:500px;display:inline-block;"><iframe src="https://www.zomato.com/widgets/all_collections.php?city_id=170&language_id=6&theme=red&widgetType=small" style="position:relative;width:100%;height:100%;" border="0" frameborder="0"></iframe></div>
            </div>
          </div>

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
