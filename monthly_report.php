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
            <h1>Today's Report</h1>
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

            <!-- php section -->
            <?php 
              // Daily Members
              //$totalDailyCash = "";
              $date = date('Y-m-d', strtotime('-3 days'));
              $daylyMembers = "";
              $totalAmount = "";
              $dailymembership = "SELECT COUNT(d_client_id) as daylyMembers, SUM(amount) as totalAmount FROM daily_clients WHERE reg_date <= '$date'";
              $drst = mysqli_query($conn, $dailymembership);
              if(mysqli_num_rows($drst)>0){
                while($d_row = mysqli_fetch_assoc($drst)){
                  $daylyMembers .= "<strong>". $d_row["daylyMembers"]. "</strong>";
                  $totalAmount .= $d_row["totalAmount"];
                }
              }
              // .Daily Members

              // Long Term Members
              $members = "";
              $amountpaid = "";
              $remainingamount = "";
              //$totalDailyCash = $totalAmount + $amountpaid + $remainingamount;
              $longTermMembers = "SELECT COUNT(client_id_no) as members, SUM(amount_paid) as amountpaid, SUM(remaining_amount) as remainingamount FROM clients WHERE date_of_reception <= '$date'";
              //$longTermMembers = "SELECT COUNT(client_id_no) as members, SUM(amount_paid) as amountpaid FROM clients WHERE date_of_reception = '$date'";
              $lrst = mysqli_query($conn, $longTermMembers);
              if(mysqli_num_rows($lrst)>0){
                while($l_row = mysqli_fetch_assoc($lrst)){
                  $members .= "<strong>". $l_row["members"]. "</strong>";
                  $amountpaid .= $l_row["amountpaid"];
                  $remainingamount .= $l_row["remainingamount"];
                }
              }
              // .Long Term Members
              //$totalDailyCash = $totalAmount + $amountpaid + $remainingamount;
              // products sold on cash
              // .product sold on cash
            ?>
            <!-- .php section -->

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Membership</th>
                      <th>Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                      <!-- Membership section -->
                      <tr>
                        <td>Daily Membership (Registered <?= $daylyMembers; ?>)</td>
                        <td><?= $totalAmount."/="; ?></td>                      
                      </tr>
                      <tr>
                        <td>Long Term Membership (Registered <?= $members; ?>) Received Amount</td>
                        <td><?= $amountpaid."/="; ?></td>              
                      </tr>

                      <tr>
                        <td>Remaining Amount</td>
                        <td><?= $remainingamount."/="; ?></td>                        
                      </tr>
                      <tr>
                        <td><strong>Total</strong></td>
                        <td><strong><?= $totalAmount + $amountpaid + $remainingamount ."/="; ?></strong></td>                       
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                      </tr>
                      <!-- .Membership section -->

                      <thead>
                    <tr>
                      <th>Products</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                      <!-- Membership section -->
                      <tr>
                        <td>Sold on Cash</td>
                        <td><?= $totalAmount."/="; ?></td>                      
                      </tr>
                      <tr>
                        <td>Sold on deduced price</td>
                        <td><?= $amountpaid."/="; ?></td>              
                      </tr>

                      <tr>
                        <td>Remaining Amount</td>
                        <td><?= $remainingamount."/="; ?></td>                        
                      </tr>
                      <tr>
                        <td><strong>Total</strong></td>
                        <td><strong><?= $totalAmount + $amountpaid + $remainingamount ."/="; ?></strong></td>                       
                      </tr>
                      <!-- .Membership section -->

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