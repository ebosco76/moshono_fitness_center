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
                
                $client_id_no = base64_decode($_GET["extend"]);
                $memberLis = "SELECT * FROM clients WHERE client_id_no = $client_id_no";
                $rs = mysqli_query($conn, $memberLis);
                if(mysqli_num_rows($rs)>0){
                while($rows = mysqli_fetch_assoc($rs)){
            ?>
            <h1><?= $rows["fullname"]; ?>'s Extend duration</h1>
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
              <form method="post" action="_uxtend_duration.php" enctype="multipart/form-data">
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
                                <select class="form-control" name="programType">
                                    <option value=""> - - Select program Type - - </option>
                                    <option value="Fitness">Fitness</option>
                                    <option value="Fat Loss">Fat Loss</option>
                                    <option value="Body Building">Body Building</option>
                                    <option value="Personal Training">Personal Training</option>
                                </select>
                                <!-- <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["program_type"]; ?>" readonly>-->
                                <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?= $client_id_no; ?>" name="client_id_no"> 
                                <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?= $staff_id; ?>" name="receivedby">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Amount</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Amount" name="receivedAmount">
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
                </div>
                <!-- /.card-body -->
                <?php
                      }
                    }
                ?>
                <div class="col-md-8 offset-md-4">    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Extend duration</button>
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