<?php
include "../proses/koneksi.php";

$username = $_GET['username'];
$type = array('Administrator','Operator');
$status = array('Aktif','Non-Aktif');
$sql = mysqli_query($koneksi,"SELECT * FROM users WHERE username = '$username'");
while ($row = mysqli_fetch_array($sql)){
?>
  <form action="../proses/proses_update_user.php" method="post">
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label>Fullname</label>
            <input class="form-control" name="name" type="text" placeholder="Enter fullname" value="<?php echo $row['name']; ?>" required>
          </div>
          <div class="col-md-6">
            <label>Username</label>
            <input name="username" type="text" required class="form-control" placeholder="Enter username" value="<?php echo $row['username']; ?>" readonly>
          </div>
        </div>
      </div>
      <div class="form-group">
	            <div class="form-row">
	              <div class="col-md-6">
	                <label>Status User</label>
	                <select class="form-control" name="status" required>
								    <?php
                      foreach ($status as $status) {
  					            echo "<option value='$status'";
                        echo $row['status_user']==$status?'selected="selected"':'';
		                    echo ">$status</option>";
			                }
		                ?>
								  </select>
	              </div>
	              <div class="col-md-6">
	                <label>Type access</label>
	                <select class="form-control" name="access" required>
								    <?php
                      foreach ($type as $type){
        					      echo "<option value='$type'";
        					      echo $row['type']==$type?'selected="selected"':'';
        					      echo ">$type</option>";
        				      }
		                ?>
								  </select>
	              </div>
	            </div>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label>Password</label>
            <input class="form-control" name="password1" type="password" placeholder="Password">
          </div>
          <div class="col-md-6">
            <label>Confirm password</label>
            <input class="form-control" name="password2" type="password" placeholder="Confirm password">
          </div>
        </div>
        <label>*Kosongkan password jika tidak dirubah</label>
        <div class="form-group">
          <div class="form-row justify-content-end">
            <div class="col-md-2">
              <input name="close" type="button" value="Close" class="btn btn-secondary btn-block" data-dismiss="modal">
            </div>
            <div class="col-md-2">
              <input name="update" type="submit" value="Update" class="btn btn-success btn-block">
            </div>
          </div>
        </div>
   </form>
<?php
}

?>
