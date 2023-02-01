<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home" class="brand-link" style="text-align:center;">
      <span class="brand-text font-weight-light">Moshono Fitness Center</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/MFCLogo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Welcome <?php echo $username ; ?></a>
        </div>
      </div>

      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="home" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="view_members" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Member(s)
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Member(s)
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="reg_member" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_members" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Members</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-eye"></i>
              <p>
                Product(s)
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view_product" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inventory</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="product_selling" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Selling</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="attendance" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Attendance
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Attendance
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="attendance" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Take Attendance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="today's_attendance" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Today's Attendance</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="view_expenses" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Expenses
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Expenses
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_expenses" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_expenses" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="payments" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Payments
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="progress" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
                Progress
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Staff
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="reg_staff" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_staffs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="packages" class="nav-link">
             <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Packages
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="daily_report" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daily</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="weekly_report" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>weekly</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="monthly_report" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monthly</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quartely</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semi Annal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Annualy</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="logout" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Log Out</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>