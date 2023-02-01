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
            <h1>Product</h1>
          </div>
          <div class="col-sm-3">
            <a href="reg_product" type="button" class="btn btn-block   btn-outline-success">Add prodcts</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- Notification -->
              <?php
                if (isset($_SESSION['message']) && $_SESSION['message'] != "") {
              ?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p style="text-align:center"> <?php echo $_SESSION['message']; ?></p>
                </div>
              <?php 
                  unset($_SESSION['message']);
                } 
              ?>
            <!-- /.Notification -->

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Profile</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Product Quantity</th>
                    <th>Product Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                    
                      $memberList = "SELECT * FROM product ORDER BY `product_id` DESC";
                      $rst = mysqli_query($conn, $memberList);
                      $i = 1;
                      if(mysqli_num_rows($rst)>0){
                        while($row = mysqli_fetch_assoc($rst)){
                          $product_id = base64_encode($row["product_id"]);
                          if($row["status"] == 1){
                            $status = "Active";
                          }else{
                            $status = "Inactive";
                          }
                    ?>

                      <tr>
                        <td><?= $i++; ?></td>
                        <td><img src="dist/img/<?= $row["product_img"]; ?>" width="50px"></td>
                        <td><?= $row["product_name"]; ?></td>
                        <td><?= $row["product_price"]; ?></td>
                        <td><?= $row["product_quantity"]; ?></td>
                        <td><?= $status; ?></td>
                        <td><div class="btn-group">
                              <button type="button" class="btn btn-success">Action</button>
                              <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="view_single_product.php?view=<?= $product_id; ?>">View</a>
                                <a class="dropdown-item" href="edit_single_product.php?edit=<?= $product_id; ?>">Edit</a>
                                <?php
                                  if ($row["status"] == 1){
                                ?>                                    
                                  <a class="dropdown-item" onclick="return confirm('Are you sure you want to deactivate this product?')" href="deactivate_product?deactivate=<?= $product_id;?>">Deactivate</a>
                                <?php
                                  }else{
                                ?>
                                  <a class="dropdown-item" onclick="return confirm('Are you sure you want to activate this product?')" href="activate_product?activate=<?= $product_id;?>">Activate</a>
                                <?php } ?>
                              </div>
                            </div>
                          </td>
                        
                      </tr>
                    <?php
                        }
                      }
                    
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require "includes/footer.php"; ?>