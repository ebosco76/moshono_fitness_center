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
            <h1>Edit Package</h1>
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
                <h3 class="card-title">Edit Package Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="_update_package.php" enctype="multipart/form-data">

              <?php
                    $package_id = base64_decode($_GET["edit"]);
                    $memberList = "SELECT * FROM packages WHERE package_id = $package_id";
                    $rst = mysqli_query($conn, $memberList);
                    if(mysqli_num_rows($rst)>0){
                    while($row = mysqli_fetch_assoc($rst)){
                ?>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Package Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["package_name"]; ?>" name="packageName">
                                <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?= $package_id; ?>" name="package_id">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Number of Days</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" value="<?= $row["number_of_days"]; ?>" name="NumberOfDays">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Package Price</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" value="<?= $row["package_price"]; ?>" name="PackagePrice">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Package Description</label>
                                <textarea class="form-control" cols="30" rows="3" name="PackageDescription"><?= $row["package_description"]; ?></textarea>
                                <!-- <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["package_description"]; ?>" name="packageName"> -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Package Discount</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" value="<?= $row["package_discount"]; ?>" name="PackageDiscount">
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
                  <button type="submit" class="btn btn-primary">Update Package</button>
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