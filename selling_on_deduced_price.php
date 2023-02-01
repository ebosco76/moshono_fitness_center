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
            <h1>Selling a product on deduced price</h1>
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
              <form method="post" action="_sell_on_deduced_price.php" enctype="multipart/form-data">

              <?php
                    $product_id = base64_decode($_GET["deducedprice"]);
                    $memberList = "SELECT * FROM product WHERE product_id = $product_id";
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
                                <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?= $product_id; ?>" name="product_id">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Quantity</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" Placeholder="Product Quantity" name="product_quantity" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Bought by </label>
                                <select class="form-control select2" style="width: 100%;" name="bought_by">
                                    <option selected="selected"> - - Select - - </option>
                                    <?php
                                        $memberList = "SELECT * FROM clients WHERE member_status = 1 ORDER BY `client_id_no` DESC";
                                        $rst = mysqli_query($conn, $memberList);
                                        if(mysqli_num_rows($rst)>0){
                                          while($row = mysqli_fetch_assoc($rst)){
                                    ?>
                                        <option value="<?= $row["client_id_no"]; ?>" ><?= $row["fullname"]; ?></option>
                                    <?php
                                          }
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Amount Received</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" Placeholder="Amount Received" name="amount_received" required>
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
                  <button type="submit" class="btn btn-primary">Sell this product</button>
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