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

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center">Login Lezzatoo Restaurant</div>
      <div class="card-body">
        <form method="post" action="../proses/proses_login.php">
          <div class="form-group">
            <label>Username</label>
            <input class="form-control" name="username" type="text" placeholder="Enter username" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input class="form-control" name="password" type="password" placeholder="Enter password" required>
          </div>
          <input name="login" type="submit" value="Login" class="btn btn-primary btn-block">
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.js"></script>
</body>

</html>
