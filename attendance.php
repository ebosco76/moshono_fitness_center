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
          <div class="col-sm-9">
            <h1>Attendance</h1>
          </div>
          <div class="col-sm-3">
            <a href="today's_attendance" type="button" class="btn btn-block   btn-outline-success">Today's attendance</a>
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
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                      $date = date('Y-m-d');
                      $memberList = "SELECT * FROM clients c, packages p WHERE c.package_id = p.package_id ORDER BY `client_id_no` DESC";
                        $rst = mysqli_query($conn, $memberList);
                        $i = 1;
                        if(mysqli_num_rows($rst)>0){
                          while($row = mysqli_fetch_assoc($rst)){
                            $client_id_no = base64_encode($row["client_id_no"]);
                    ?>

                      <tr>
                        <td><?= $i++; ?></td>
                        <td><img src="dist/img/<?= $row["profile_pic"]; ?>" width="50px"></td>
                        <td><?= $row["fullname"]; ?></td>
                        <td><?= $row["age"]; ?></td>
                        <td><?= $row["phoneno"]; ?></td>
                        <td><?= $row["package_name"]; ?></td>
                        <td><?= date("d-m-Y", strtotime($row["end_of_program_date"])); ?></td>
                        <td><a href="_attendance.php?attendance=<?= $client_id_no; ?>" type="button" onclick="return confirm('Are you sure you want to checkin this member?')" class="btn btn-block btn-outline-success">CheckIn</a></td>
                        
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