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
            <h1>Products registation</h1>
          </div>
          <div class="col-sm-3">
            <a href="view_product" type="button" class="btn btn-block   btn-outline-success">View prodcts</a>
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
              <form method="post" action="_reg_product.php" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="dist/img/System logo.png" width="90px" alt="" style="display:block;margin:auto;">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="productImg">
                                        <!-- <label class="custom-file-label mt-2" for="exampleInputFile">Member Profile</label> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Product Name" name="productName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Quantity</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Product Quantity" name="product_quantity">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Price" name="price">
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