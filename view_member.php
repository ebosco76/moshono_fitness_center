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
                
                    $client_id_no = base64_decode($_GET["view"]);
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
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gender</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["gender"]; ?>" name="fullName" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Weight</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["weight"]." Kg"; ?>" name="weight" readonly>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Age</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["age"]; ?>" name="age" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["phoneno"]; ?>" name="phoneNumber" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Height</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["height"]." Cm"; ?>" name="height" readonly>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["client_email"]; ?>" name="email" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Total Program Cost</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= "Tshs ".$row["package_price"]. " /="; ?>" name="email" readonly>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Membership Expire Date</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= date("d-m-Y", strtotime($row["end_of_program_date"])); ?>" name="height" readonly>
                            </div>

                            <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Received Amount</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= "Tshs ".$row["amount_paid"]. " /="; ?>" name="email" readonly>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Program Type</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["program_type"]; ?>" name="receivedAmount" readonly>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Remaining Amount</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= "Tshs ".$row["remaining_amount"]. " /="; ?>" name="receivedAmount" readonly>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <?php
                    }
                    }
                ?>
                
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