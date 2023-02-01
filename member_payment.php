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
          <?php
                
                $client_id_no = base64_decode($_GET["reduce"]);
                $memberLis = "SELECT * FROM clients WHERE client_id_no = $client_id_no";
                $rs = mysqli_query($conn, $memberLis);
                if(mysqli_num_rows($rs)>0){
                while($rows = mysqli_fetch_assoc($rs)){
            ?>
            <h1><?= $rows["fullname"]; ?>'s Payments</h1>
            <?php }} ?>
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
              <form method="post" action="_update_payment.php" enctype="multipart/form-data">
                <?php
                
                    // $client_id_no = base64_decode($_GET["reduce"]);
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
                                <label for="exampleInputEmail1">Program Type</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["program_type"]; ?>" readonly>
                                <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?= $client_id_no; ?>" name="member_id">
                                <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?= $staff_id; ?>" name="receivedby">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Total Program Cost</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= "Tshs ".$row["package_price"]. " /="; ?>" name="email" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Remaining Amount</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= "Tshs ".$row["remaining_amount"]. " /="; ?>" readonly>
                                <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?= $row["remaining_amount"]; ?>" name="remaining_amount" readonly>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Duration</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["package_name"]; ?>" name="height" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Received Amount</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= "Tshs ".$row["amount_paid"]. " /="; ?>" readonly>
                                <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?= $row["amount_paid"]; ?>" name="paid_amount" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Amount</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="amount" name="amount_paid_today">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <?php
                    }
                    }
                ?>
                <div class="col-md-8 offset-md-4">    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Payment</button>
                    </div>
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