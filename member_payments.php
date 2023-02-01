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
            <h1>View Member</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Personal Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="_reg_member.php" enctype="multipart/form-data">
                <?php
                
                    $client_id_no = base64_decode($_GET["payments"]);
                    $memberList = "SELECT * FROM clients WHERE client_id_no = $client_id_no";
                    $rst = mysqli_query($conn, $memberList);
                    if(mysqli_num_rows($rst)>0){
                    while($row = mysqli_fetch_assoc($rst)){
                
                ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="dist/img/About_us.jpg" width="250px" height="250px" alt="" style="display:block;margin:auto;">
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["fullname"]; ?>" name="fullName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gender</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["gender"]; ?>" name="gender">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Weight</label>
                                <input type="Number" class="form-control" id="exampleInputEmail1" value="<?= $row["weight"]; ?>" name="weight">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Age</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["age"]; ?>" name="age">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["phoneno"]; ?>" name="phoneNumber">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Height</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" value="<?= $row["height"]; ?>" name="height">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-md-4">
                        <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["email"]; ?>" name="email">
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Duration</label>
                                <select class="form-control" name="duration">
                                    <option value="<?= $row["duration"]; ?>"> <?= $row["duration"]; ?></option>
                                    <?php
                    
                                      $packageList = "SELECT * FROM packages";
                                      $prst = mysqli_query($conn, $packageList);
                                      if(mysqli_num_rows($prst)>0){
                                        while($row = mysqli_fetch_assoc($prst)){
                                    ?>
                                     <option value="<?= $row["package_id"].",".$row["number_of_days"].",".$row["package_price"].",".$row["package_name"]; ?>"><?= $row["package_name"]; ?></option>
                                    <?php
                                        }
                                      }
                                  
                                  ?>
                                </select>
                            </div>

                            <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Received Amount</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" value="<?= $row["amount_paid"]; ?>" name="amount_paid">
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Program Type</label>
                                <select class="form-control" name="programType">
                                    <option value="<?= $row["program_type"]; ?>"><?= $row["program_type"]; ?></option>
                                    <option value="Fitness">Fitness</option>
                                    <option value="Fat Loss">Fat Loss</option>
                                    <option value="Body Building">Body Building</option>
                                    <option value="Personal Training">Personal Training</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Remaining Amount</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" value="<?= $row["remaining_amount"]; ?>" name="receivedAmount">
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <?php
                    }
                    }
                ?>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require "includes/footer.php"; ?>