<?php 
  require "includes/header.php"; 
  require "includes/staff_menu.php"; 
?>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php
                    $allMembers = "SELECT COUNT(client_id_no) AS allmembers FROM clients";
                    $rst_allMembers = mysqli_query($conn, $allMembers);
                    if(mysqli_num_rows($rst_allMembers)>0){
                      while($row = mysqli_fetch_assoc($rst_allMembers)){
                        echo $row["allmembers"];
                      }
                    }
                  ?>
                </h3>

                <p>All Registered Members</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="view_members.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                  <?php
                    $allActiveMembers = "SELECT COUNT(client_id_no) AS allactivemembers FROM clients WHERE member_status = 1";
                    $rst_allActiveMembers = mysqli_query($conn, $allActiveMembers);
                    if(mysqli_num_rows($rst_allActiveMembers)>0){
                      while($row = mysqli_fetch_assoc($rst_allActiveMembers)){
                        echo $row["allactivemembers"];
                      }
                    }
                  ?>
                </h3>

                <p>Active Members</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="view_members.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                  <?php
                    $totalEarnings = "SELECT SUM(amount_paid) AS totalEarnings FROM clients";
                    $rst_totalEarnings = mysqli_query($conn, $totalEarnings);
                    if(mysqli_num_rows($rst_totalEarnings)>0){
                      while($row = mysqli_fetch_assoc($rst_totalEarnings)){
                        echo $row["totalEarnings"];
                      }
                    }
                  ?>
                </h3>

                <p>Total Earnings</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>
                  <?php
                    $totalExpenses = "SELECT SUM(expense_price) AS totalExpenses FROM expenses";
                    $rst_totalExpenses = mysqli_query($conn, $totalExpenses);
                    if(mysqli_num_rows($rst_totalExpenses)>0){
                      while($row = mysqli_fetch_assoc($rst_totalExpenses)){
                        echo $row["totalExpenses"];
                      }
                    }
                  ?>
                </h3>

                <p>Total Expenses</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="view_expenses.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer-->
  <?php require "includes/footer.php"?>
  <!-- /.footer -->