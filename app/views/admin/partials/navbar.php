<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo route('home'); ?>" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <div class="image">
          <img src="<?php echo asset('/assets/images/user-profile-14024728.png'); ?>" height="30" width="30" class="img-circle elevation-2" alt="User Image">
        </div>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Account Setting</span>
          <div class="dropdown-divider"></div>
          <a href="<?php echo route('admin.users.edit',[
            'id' => $_COOKIE['user_id']
          ]); ?>" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo route('admin.logout'); ?>" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Logout
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All</a>
        </div>
      </li>


    </ul>
  </nav>