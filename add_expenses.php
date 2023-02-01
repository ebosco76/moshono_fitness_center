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
            <h1>Add expenses</h1>
          </div>
          <div class="col-sm-3">
            <a href="view_expenses" type="button" class="btn btn-block   btn-outline-success">Back to expenses list</a>
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
              <form method="post" action="_reg_expense.php">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" cols="30" rows="7" name="description"></textarea>
                            </div>

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