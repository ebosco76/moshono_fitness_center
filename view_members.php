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
          <div class="col-sm-3">
            <h1>Members</h1>
          </div>
          <div class="col-sm-3">
            <a href="reg_member" type="button" class="btn btn-block   btn-outline-success">Add long term member</a>
          </div>
          <div class="col-sm-3">
            <a href="reg_daily_member" type="button" class="btn btn-block   btn-outline-success">Add daily member</a>
          </div>
          <div class="col-sm-3">
          <a href="view_daily_members" type="button" class="btn btn-block   btn-outline-success">Register Return Member</a>
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
                    <th>Membership Duration</th>
                    <th>Membership Expire Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                      $memberList = "SELECT * FROM clients c, packages p WHERE c.package_id = p.package_id ORDER BY `client_id_no` DESC";
                      $rst = mysqli_query($conn, $memberList);
                      $i = 1;
                      if(mysqli_num_rows($rst)>0){
                        while($row = mysqli_fetch_assoc($rst)){
                          $client_id_no = base64_encode($row["client_id_no"]);
                          if ($row["member_status"] == 1){
                            $member_status = "Active";
                          }else{
                            $member_status = "Inactive";
                          }
                    ?>

                      <tr>
                        <td><?= $i++; ?></td>
                        <td><img src='dist/img/<?= $row["profile_pic"]; ?>' width="50px"></td>
                        <td><?= $row["fullname"]; ?></td>
                        <td><?= $row["age"]; ?></td>
                        <td><?= $row["phoneno"]; ?></td>
                        <td><?= $row["package_name"]; ?></td>
                        <td><?= date("d-m-Y", strtotime($row["end_of_program_date"])); ?></td>
                        <td><?= $member_status; ?></td>
                        <td>
                          <div class="btn-group">
                              <button type="button" class="btn btn-success">Action</button>
                              <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                <!-- <span class="sr-only">Toggle Dropdown</span> -->
                              </button>
                              <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="view_member?view=<?= $client_id_no;?>">View</a>
                                <a class="dropdown-item" href="edit_member?edit=<?= $client_id_no;?>">Edit</a>
                                <?php
                                  if ($row["member_status"] == 1){
                                ?>                                    
                                  <a class="dropdown-item" onclick="return confirm('Are you sure you want to deactivate this member?')" href="deactivate_member?deactivate=<?= $client_id_no;?>">Deactivate</a>
                                <?php
                                  }else{
                                ?>
                                  <a class="dropdown-item" onclick="return confirm('Are you sure you want to activate this member?')" href="activate_member?activate=<?= $client_id_no;?>">Activate</a>
                                <?php } ?>
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