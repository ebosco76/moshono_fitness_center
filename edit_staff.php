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
            <h1>Edit Staff</h1>
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
              <form method="post" action="_update_staff.php" enctype="multipart/form-data">
                <?php
                    $staff_id = base64_decode($_GET["edit"]);
                    $memberList = "SELECT * FROM staff WHERE staff_id = $staff_id";
                    $rst = mysqli_query($conn, $memberList);
                    if(mysqli_num_rows($rst)>0){
                    while($row = mysqli_fetch_assoc($rst)){
                ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="dist/img/<?= $row["image"]; ?>" width="230px" height="250px" style="display:block;margin:auto;">
                            <input type="file" class="form-control" id="exampleInputEmail1" name="StaffProfile">
                            <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?= $row["image"]; ?>" name="olfprofile">
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["fullname"]; ?>" name="fullName">
                                <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?= $staff_id; ?>" name="staff_id">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gender</label>
                                  <select class="form-control" name="gender">
                                      <option value="<?= $row["gender"]; ?>"> <?= $row["gender"]; ?> </option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Position</label>
                                  <select class="form-control" name="position">
                                        <option value="<?= $row["position"]; ?>"><?= $row["position"]; ?> </option>
                                        <option value="Admin">Admin</option>
                                        <option value="Trainer">Trainer</option>
                                    </select>
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["username"]; ?>" name="username">
                            </div> -->
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Age</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" value="<?= $row["age"]; ?>" name="age">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["phoneno"]; ?>" name="phoneNumber">
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
                  <button type="submit" class="btn btn-primary">Update Staff</button>
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