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
    
    <?php 
        $client_id_no = base64_decode($_GET["viewprogress"]);
        $memberLis = "SELECT * FROM clients WHERE client_id_no = $client_id_no";
        $rs = mysqli_query($conn, $memberLis);
        if(mysqli_num_rows($rs)>0){
        while($rows = mysqli_fetch_assoc($rs)){
    ?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $rows["fullname"]; ?>'s Progress</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php }} ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Well done for this progress</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="_reg_progress.php" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                    <?php 
                        $memberList = "SELECT * FROM clients c, progress p WHERE c.client_id_no = p.client_id_no and p.client_id_no = $client_id_no ORDER BY `progress_id` DESC";
                        $rst = mysqli_query($conn, $memberList);
                        if(mysqli_num_rows($rst)>0){
                        while($row = mysqli_fetch_assoc($rst)){
                    ?>
                        <div class="col-md-4">
                            <img src="dist/img/<?= $row["progress_image"]; ?>" width="230px" height="250px" alt="" style="display:block;margin:auto;">
                            <p style="text-align:center">
                                Progress recorded on <strong><?= date("d-m-Y", strtotime($row["date"])); ?></strong>,
                                <br /> Old weigh <strong><?= $row["old_weight"]; ?></strong>,
                                <br /> New wight <strong><?= $row["new_weight"]; ?></strong>
                            </p>
                        </div> 
                    <?php
                        }
                        }else{
                          echo "No progress has been recorded yet";
                        }
                ?>                                 
                </div>
                <!-- /.card-body -->
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