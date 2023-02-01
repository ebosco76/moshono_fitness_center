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
            <h1>Payment</h1>
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
                <h3 class="card-title">Product Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="_pay_deduced_product.php" enctype="multipart/form-data">

              <?php
                    $selling_id = base64_decode($_GET["deduct"]);
                    $memberList = "SELECT * FROM product p, clients c, selling_product s 
                                   WHERE c.client_id_no = s.client_id_no 
                                   AND s.product_id = p.product_id 
                                   AND selling_id = $selling_id";
                    $rst = mysqli_query($conn, $memberList);
                    if(mysqli_num_rows($rst)>0){
                    while($row = mysqli_fetch_assoc($rst)){
                ?>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="dist/img/<?= $row["product_img"]; ?>" width="230px" height="250px" alt="" style="display:block;margin:auto;">
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["product_name"]." (Tshs ".$row["product_price"]." /=)"; ?>" name="productName" readonly>
                                <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?= $row["product_price"]; ?>" name="productPrice">
                                <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?= $selling_id; ?>" name="selling_id">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Paid Amount</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" value="<?= $row["received_amount"]; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Received Amount</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" Placeholder="Received Amount" name="received_amount" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Bought by </label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row["fullname"]; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Remaining Amount</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" value="<?= $row["remaining_amount"]; ?>" readonly>
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
                  <button type="submit" class="btn btn-primary">Make Payment</button>
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