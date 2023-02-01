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
            <h1>Member Registration</h1>
          </div>
          <div class="col-sm-3">
            <a href="view_members" type="button" class="btn btn-block   btn-outline-success">Back to member list</a>
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
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="dist/img/System logo.png" width="90px" alt="" style="display:block;margin:auto;">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="memberProfile">
                                        <!-- <label class="custom-file-label mt-2" for="exampleInputFile">Member Profile</label> -->
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group mt-3">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="client_email">
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Full Name" name="fullName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gender</label>
                                  <select class="form-control" name="gender">
                                      <option value=""> - - Select gender here - - </option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Weight</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Weight" name="weight">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Age</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Age" name="age">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone Number" name="phoneNumber" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Height</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="height" name="height">
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Program Type</label>
                                <select class="form-control" name="programType">
                                    <option value=""> - - Select Program Type  - - </option>
                                    <option value="Fitness">Fitness</option>
                                    <option value="Fat Loss">Fat Loss</option>
                                    <option value="Body Building">Body Building</option>
                                    <option value="Personal Training">Personal Training</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Duration</label>
                                <select class="form-control" name="duration">
                                    <option value=""> - - Select Duration - - </option>
                                    <?php
                    
                                      $packageList = "SELECT * FROM packages";
                                      $prst = mysqli_query($conn, $packageList);
                                      if(mysqli_num_rows($prst)>0){
                                        while($row = mysqli_fetch_assoc($prst)){
                                    ?>
                                     <option value="<?= $row["package_id"].",".$row["package_price"]; ?>"><?= $row["package_name"]." (Price Tshs ".$row["package_price"]." /=)"; ?></option>
                                    <?php
                                        }
                                      }
                                  
                                  ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Received Amount</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Received Amount" name="receivedAmount">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Register</button>
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