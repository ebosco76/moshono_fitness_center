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
            <h1>Staff Registration</h1>
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
              <form method="post" action="_reg_staff.php" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="dist/img/System logo.png" width="90px" alt="" style="display:block;margin:auto;">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="StaffProfile">
                                        <!-- <label class="custom-file-label mt-2" for="exampleInputFile">Member Profile</label> -->
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group mt-4">
                                <label for="exampleInputEmail1">Position</label>
                                  <select class="form-control" name="position">
                                        <option value=""> - - Select position here - - </option>
                                        <option value="Admin">Admin</option>
                                        <option value="Trainer">Trainer</option>
                                    </select>
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
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="username" name="username">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Age</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Age" name="age">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone Number" name="phoneNumber">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="12345" name="password">
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