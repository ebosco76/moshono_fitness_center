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
            <h1>Product bought by deduction</h1>
          </div>
          <div class="col-sm-3">
            <a href="product_selling" type="button" class="btn btn-block   btn-outline-success">Back to products</a>
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
                    <th>Product Quantity</th>
                    <th>Total Price</th>
                    <th>Paid Amount</th>
                    <th>Remaining Price</th>
                    <th>Bought By</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                    
                      $memberList = "SELECT * FROM product p, clients c, selling_product s WHERE c.client_id_no = s.client_id_no AND s.product_id = p.product_id AND s.`remaining_amount` != 0";
                      $rst = mysqli_query($conn, $memberList);
                      $i = 1;
                      if(mysqli_num_rows($rst)>0){
                        while($row = mysqli_fetch_assoc($rst)){
                          $selling_id = base64_encode($row["selling_id"]);
                    ?>

                      <tr>
                        <td><?= $i++; ?></td>
                        <td><img src="dist/img/<?= $row["product_img"]; ?>" width="50px"></td>
                        <td><?= $row["product_name"]; ?></td>
                        <td><?= $row["product_quantity"]." x ".$row["product_price"] ; ?></td>
                        <td><?= $row["total_price"]; ?></td>
                        <td><?= $row["received_amount"]; ?></td>
                        <td><?= $row["remaining_amount"]; ?></td>
                        <td><?= $row["fullname"]; ?></td>
                        <td><a href="pay_deduced_product?deduct=<?= $selling_id; ?>" type="button" class="btn btn-block btn-outline-success">Pay</a></td>
                        
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