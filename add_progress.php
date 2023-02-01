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
            <h1>Add Member's Progress</h1>
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
              <form method="post" action="_reg_progress.php" enctype="multipart/form-data">
                <?php
                
                    $client_id_no = base64_decode($_GET["progress"]);
                    $memberList = "SELECT * FROM clients c, packages p WHERE c.package_id = p.package_id and client_id_no = $client_id_no";
                    $rst = mysqli_query($conn, $memberList);
                    if(mysqli_num_rows($rst)>0){
                    while($row = mysqli_fetch_assoc($rst)){
                ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="dist/img/<?= $row["profile_pic"]; ?>" width="230px" height="250px" alt="" style="display:block;margin:auto;">
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["fullname"]; ?>" name="fullName" readonly>
                                <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?= $client_id_no; ?>" name="client_id_no" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last recorded Weight</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["weight"]." Kg ( Recorded on : ".date("d-m-Y", strtotime($row["progress_date"]))." )" ; ?>" name="weight" readonly>
                                <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?= $row["weight"]; ?>" name="oldweight" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">New Weight</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" Placeholder="New Weight" name="newweight" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Program Type</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["program_type"]; ?>" name="receivedAmount" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Height</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["height"]." Cm"; ?>" name="height" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Upload Progress image</label>
                                <input type="file" class="form-control" id="exampleInputEmail1" name="progressImage">
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
                    <button type="submit" class="btn btn-primary">Record</button>
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