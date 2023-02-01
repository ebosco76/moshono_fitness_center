<?php 
  require "includes/header.php"; 
  if($position == "Admin"){
    require "includes/menu.php"; 
   }else{
     require "includes/staff_menu.php"; 
   }
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Staffs</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- Notification -->
              <?php
                if (isset($_SESSION['message']) && $_SESSION['message'] != "") {
              ?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p style="text-align:center"> <?php echo $_SESSION['message']; ?></p>
                </div>
              <?php 
                  unset($_SESSION['message']);
                } 
              ?>
            <!-- /.Notification -->

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Profile</th>
                    <th>Full Name</th>
                    <th>Age</th>
                    <th>Phone Number</th>
                    <th>Username</th>
                    <th>Position</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                    
                      $memberList = "SELECT * FROM staff ORDER BY `staff_id` DESC";
                      $rst = mysqli_query($conn, $memberList);
                      $i = 1;
                      if(mysqli_num_rows($rst)>0){
                        while($row = mysqli_fetch_assoc($rst)){
                          $staff_id = base64_encode($row["staff_id"]);
                          if($row["status"] == 1){
                            $status = "Active";
                          }else{
                            $status = "Inactive";
                          }
                    ?>

                      <tr>
                        <td><?= $i++; ?></td>
                        <td><img src="dist/img/<?= $row["image"]; ?>" width="50px"></td>
                        <td><?= $row["fullname"]; ?></td>
                        <td><?= $row["age"]; ?></td>
                        <td><?= $row["phoneno"]; ?></td>
                        <td><?= $row["username"]; ?></td>
                        <td><?= $row["position"]; ?></td>
                        <td><?= $status; ?></td>
                        <td><div class="btn-group">
                              <button type="button" class="btn btn-success">Action</button>
                              <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="view_staff.php?view=<?= $staff_id;?>">View</a>
                                <a class="dropdown-item" href="edit_staff.php?edit=<?= $staff_id;?>">Edit</a>
                                <a class="dropdown-item" onclick="return confirm('Are you sure you want to deactivate this staff?')" href="deactivate_staff.php?deactivate=<?= $staff_id; ?>">Deactivate</a>
                              </div>
                            </div>
                          </td>
                        
                      </tr>
                    <?php
                        }
                      }
                    
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require "includes/footer.php"; ?>