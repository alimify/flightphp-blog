  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo route('admin.dashboard.index'); ?>" class="brand-link">
      <img src="<?php echo asset('/assets/images/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Blog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo asset('/assets/images/user-profile-14024728.png'); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php
              use app\records\CategoryRecord;
              echo $_COOKIE['name']??''; ?>
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo route('admin.dashboard.index'); ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo route('admin.users.index'); ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo route('admin.articles.index'); ?>" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Articles
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo route('admin.category.index'); ?>" class="nav-link">
              <i class="nav-icon fas fa-warehouse"></i>
              <p>
                Category
              </p>
            </a>
          </li>

          <?php 
              $categories = new CategoryRecord();
              $categories = $categories->order('id asc')->findAll();
              
              foreach ($categories as $cat) { ?>
                <li class="nav-item">
                <a href="<?php echo route('admin.category.articles',[
                  'alias' => $cat->slug
                ]); ?>" class="nav-link">
                  <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    <?php echo $cat->displayName; ?>
                  </p>
                </a>
              </li>
              <?php }
          
          ?>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
