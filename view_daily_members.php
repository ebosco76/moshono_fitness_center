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
            <h1>List of daily members</h1>
          </div>
          <div class="col-sm-3">
            <a href="reg_member" type="button" class="btn btn-block   btn-outline-success">Add long term member</a>
          </div>
          <div class="col-sm-3">
              <a href="reg_daily_member" type="button" class="btn btn-block btn-outline-success">Add daily member</a>
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
                    <th>Full Name</th>
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>Attendance date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                      $memberList = "SELECT * FROM daily_clients ORDER BY `d_client_id` DESC";
                      $rst = mysqli_query($conn, $memberList);
                      $i = 1;
                      if(mysqli_num_rows($rst)>0){
                        while($row = mysqli_fetch_assoc($rst)){
                          //$d_client_id = base64_encode($row["d_client_id"]);
                          $full_name = $row["full_name"];
                          $phone_number = $row["phone_number"];
                          $gender = $row["gender"];
                    ?>

                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row["full_name"]; ?></td>
                        <td><?= $row["phone_number"]; ?></td>
                        <td><?= $row["gender"]; ?></td>
                        <td><?= date("d-m-Y", strtotime($row["reg_date"])); ?></td>
                        <td>
                            <!-- <a href="has_return_again?hasRetun=<?= $d_client_id; ?>" onclick="return confirm('Are you sure you want to register this member?')" type="button" class="btn btn-block   btn-outline-success">Has return again</a> -->
                            <a href="has_return_again?full_name=<?= $full_name; ?>&phone_number=<?= $phone_number; ?>&gender=<?= $gender; ?>" onclick="return confirm('Are you sure you want to register this member?')" type="button" class="btn btn-block   btn-outline-success">Has return again</a>
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