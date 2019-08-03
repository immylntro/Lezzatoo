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
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
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
        <li class="breadcrumb-item active">Food</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-pencil"></i> Update Food</div>
        <div class="card-body">
          <?php
          include "../proses/koneksi.php";
          $id_food = $_GET['id_food'];
					$status = array('Unpublish / Draft','Publish');
          $sql = mysqli_query($koneksi,"SELECT * FROM food WHERE id_food = $id_food");
          while ($row = mysqli_fetch_array($sql)){
          ?>
	        <form action="../proses/proses_update_food.php" method="post">
						<input type="hidden" name="id_food" value="<?php echo $row['id_food']; ?>">
	          <div class="form-group">
	            <div class="form-row">
	              <div class="col-md-6">
	                <label>Title</label>
	                <input class="form-control" name="name" type="text" placeholder="Enter title" value="<?php echo $row['name']; ?>" required>
	              </div>
	              <div class="col-md-3">
			            <label>Price</label>
			            <input class="form-control" name="price" type="text" placeholder="Enter price" value="<?php echo $row['price']; ?>" required>
		          	</div>
	            </div>
	          </div>
	          <div class="form-group">
	            <label>Content</label>
				<textarea name="content"><?php echo $row['content']; ?></textarea>
	          </div>
						<div class="form-group">
	            <div class="form-row">
	              <div class="col-md-2">
	          			<input name="submit" type="submit" value="Update" class="btn btn-success btn-block">
	              </div>
	            </div>
	          </div>
	        </form>
          <?php
          }
          ?>
        </div>
      </div>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Table News</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr class="table-active text-center">
                  <th>ID Food</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Update</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody class="text-center">
								<?php
                    include "../proses/koneksi.php";
                    $sql = mysqli_query($koneksi,"SELECT * FROM food");
                    while ($row = mysqli_fetch_array($sql)) {
                ?>
                <tr>
                  <td><?php echo $row['id_food']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['price']; ?></td>
                  <td><?php echo $row['last_update']; ?></td>
									<td>
                    <a class="btn btn-success btn-sm" href="edit_food.php?id_food=<?php echo  $row['id_food']; ?>"><i class="fa fa-pencil-square-o fa-lg"></i> Update</a>
										<a class="btn btn-danger btn-sm" href="../proses/proses_hapus_food.php?id_food=<?php echo $row['id_food']; ?>" onClick="return confirm('Hapus data makanan ?')"><i class="fa fa-trash fa-lg"></i> Delete</a>
									</td>
								</tr>
            	<?php
					}
                ?>
              </tbody>
            </table>
          </div>
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
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../vendor/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../vendor/js/sb-admin-datatables.min.js"></script>
    <script src="../vendor/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
    tinymce.init({
		selector: "textarea",
		height: 500,
		mode : "exact",
		theme: "modern",

      // ===========================================
      // INCLUDE THE PLUGIN
      // ===========================================

      plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste responsivefilemanager"
      ],

	  image_advtab: true,

      // ===========================================
      // PUT PLUGIN'S BUTTON on the toolbar
      // ===========================================

      //toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",
      //toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",

		toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
		toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
		image_advtab: true ,


      // ===========================================
      // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
      // ===========================================
		external_filemanager_path:"/lezzatoo/vendor/filemanager/",
		filemanager_title:"Responsive Filemanager" ,
		external_plugins: { "filemanager" : "/lezzatoo/vendor/filemanager/plugin.min.js"},
		filemanager_access_key:"myPrivateKey",
		relative_urls: false
    });

		</script>
  </div>
</body>

</html>
