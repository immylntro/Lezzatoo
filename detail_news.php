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
    $id_news = $_GET['id_news'];
    $sql = mysqli_query($koneksi,"SELECT news.*, users.name FROM news INNER JOIN users USING(username) WHERE id_news=$id_news");
    while ($row = mysqli_fetch_array($sql)){
		$time = strtotime($row['created']);
    $format = date("l, d F Y g:i:s A", $time);
    ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Detail News</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">News</li>
      </ol>

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-md-8">

          <h1 class="mt-4 mb-3"><?php echo $row['title']; ?></h1>

          <h5 class="text-muted">by <?php echo $row['name']; ?></h5>

          <hr>

          <!-- Date/Time -->
          <p class="text-muted">Posted on <?php echo $format;?></p>

          <hr>

          <!-- Post Content -->

          <p><?php echo $row['content']; ?></p>

          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form action="proses/proses_tambah_comment.php" method="post">
                <input type="hidden" name="id_news" value="<?php echo $id_news;?>">
                <div class="form-group">
                  <textarea class="form-control" rows="3" name="content"></textarea>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

      		<?php
            $limit = 3;
            $page = isset ($_GET['page']) ? (int) $_GET['page'] : 1;
            $posisi = ($page-1) * $limit;
            $sql1 = mysqli_query($koneksi,"SELECT * FROM comment WHERE status='Approve' AND id_news=$id_news ORDER BY id_comment DESC LIMIT $posisi, $limit");
    		    if($sql->num_rows!=0){
              while ($row = mysqli_fetch_array($sql1)) {
		            $time = strtotime($row['date']);
                $format = date("l, d F Y g:i:s A", $time);
          ?>
          <!-- Single Comment -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="vendor/images/user.jpg" width="50" height="50" alt="" width="">
            <div class="media-body">
              <h5 class="mt-0 text-primary"><?php echo $row['author']; ?></h5>
              <small class="text-muted"><?php echo $format; ?></small>
              <p><?php echo $row['content']; ?></p>
            </div>
          </div>
          <?php }
            }
            $sql2 = mysqli_query($koneksi,"SELECT * FROM comment WHERE id_news=$id_news AND status='Approve'");
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
                  <a class="page-link" href="?id_news=<?php echo $_GET['id_news']; ?>&&page=<?php echo $previous ?>" aria-label="Previous">
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
                    <a class="page-link" href="?id_news=<?php echo $_GET['id_news']; ?>&&page=<?php echo $i ?>"><?php echo $i ?></a>
                </li>
                <?php }
                  }
                  if (empty($total)) {
                ?>
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
                <?php } else if ($page == $pages) { ?>
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
                  <a class="page-link" href="?id_news=<?php echo $_GET['id_news']; ?>&&page=<?php echo $next ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
                <?php } ?>
              </ul>

        </div>
        <?php } ?>

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
            <h5 class="card-header">Side Widget</h5>
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

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>
