<?php
session_start();
if (!isset($_SESSION['username'])) {
	echo "<script>alert('Silahkan Login Terlebih Dahulu !');location.href='../proses/login.php';</script>";
}
if ($_SESSION['type'] != "Administrator") {
	echo "<script>alert('Maaf, Anda bukan administrator !');location.href='javascript:history.back()';</script>";
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
            <span class="nav-link">Hello, <?php echo $_SESSION['name'];?> <img src="../vendor/images/user.jpg" alt="" width="40px" class="rounded-circle"></span>
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
        <li class="breadcrumb-item active">Users</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-pencil"></i> Form Input User</div>
	      <div class="card-body">
	        <form action="../proses/proses_tambah_user.php" method="post" enctype="multipart/form-data">
	          <div class="form-group">
	            <div class="form-row">
	              <div class="col-md-6">
	                <label>Fullname</label>
	                <input class="form-control" name="name" type="text" placeholder="Enter fullname" required>
	              </div>
	              <div class="col-md-6">
	                <label>Username</label>
	                <input class="form-control" name="username" type="text" placeholder="Enter username" required>
	              </div>
	            </div>
	          </div>
	          <div class="form-group">
	            <div class="form-row">
	              <div class="col-md-6">
	                <label>Status User</label>
	                <input class="form-control" name="status" type="text" value="Aktif" readonly>
	              </div>
	              <div class="col-md-6">
	                <label>Type access</label>
	                <select class="form-control" name="access" required>
								    <option value="">Select type access</option>
								    <option value="1">Administrator</option>
								    <option value="2">Operator</option>
								  </select>
	              </div>
	            </div>
	          </div>
	          <div class="form-group">
	            <div class="form-row">
	              <div class="col-md-6">
	                <label>Password</label>
	                <input class="form-control" name="password1" type="password" placeholder="Enter password" required>
	              </div>
	              <div class="col-md-6">
	                <label>Confirm password</label>
	                <input class="form-control" name="password2" type="password" placeholder="Confirm password" required>
	              </div>
	            </div>
	          </div>
	          <div class="form-group">
	            <div class="form-row justify-content-end">
	              <div class="col-md-2">
	          			<input name="reset" type="reset" value="Reset" class="btn btn-secondary btn-block">
	              </div>
	              <div class="col-md-2">
	          			<input name="submit" type="submit" value="Submit" class="btn btn-primary btn-block">
	              </div>
	            </div>
	          </div>
	        </form>
	      </div>
      </div>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Table Users</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead class="thead-dark text-center">
                <tr>
                  <th>Username</th>
                  <th>Name</th>
                  <th>Type Access</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
								<?php
                  include "../proses/koneksi.php";
                  $sql = mysqli_query($koneksi,"SELECT * FROM users");
                  while ($row = mysqli_fetch_array($sql)) {
                ?>
                <tr>
                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['type']; ?></td>
                  <td>
										<?php if ($row['status_user'] == 'Aktif') { ?>
											<div class="text-success font-weight-bold">Aktif</div>
										<?php } else {?>
											<div class="text-danger font-weight-bold">Non-Aktif</div>
										<?php } ?>
									</td>
									<td class="text-center">
										<a href="#edit_modal" class="btn btn-success btn-sm" data-toggle="modal" data-id='<?php echo  $row['username']; ?>'><i class="fa fa-pencil-square-o fa-lg"></i></a>
										<a class="btn btn-danger btn-sm" href="../proses/proses_hapus_user.php?username=<?php echo $row['username']; ?>" onClick="return confirm('Hapus data user ini ?')"><i class="fa fa-trash fa-lg"></i></a>
                </tr>
								<?php  } ?>
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
    <!-- Edit Modal-->
    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="edit">Update Data User</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
          	<div class="body-data"></div>
          </div>
        </div>
      </div>
    </div>
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
	  <script type="text/javascript">
			$(document).ready(function(){
				$('#edit_modal').on('show.bs.modal', function (e) {
						var username = $(e.relatedTarget).data('id');
				$.ajax({
				type : 'get',
				url : 'edit_user.php',
				data :  'username='+ username,
				success : function(data){
				$('.body-data').html(data);
				}
			  });
			  });
			});
    </script>
  </div>
</body>

</html>
