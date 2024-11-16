

<?php Flight::render('admin/partials/top'); ?>
  
<?php Flight::render('admin/partials/navbar'); ?>

<?php Flight::render('admin/partials/sidebar'); ?>

<?php

$method = "POST";
$actionLink = route('admin.users.store');
if(!empty($user)){
    $method = "POST";
    $actionLink = route('admin.users.update',[
      'id' => $user->id
    ]);
}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo route('admin.dashboard.index'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">User</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <div class="row">
            <div class="col-md-6">
            <div class="card card-primary mx-4">
            <form action="<?php echo $actionLink; ?>" method="<?php echo $method; ?>" autocomplete="off">   
                <div class="card-body">
                <input type="hidden" value="<?php echo $user->id??null; ?>" name="user_id"/>

                 <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" value="<?php echo $user->name??''; ?>" name="name" class="form-control" id="name" placeholder="Enter Name">
                  </div>

                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" value="<?php echo $user->email??''; ?>" class="form-control" id="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input autocomplete="new-password" type="password" name="password" class="form-control" id="password" placeholder="Password">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
           </div>

            </div>
        </div>
  </div>
  <!-- /.content-wrapper -->
  <?php Flight::render('admin/partials/footer'); ?>


</div>
<!-- ./wrapper -->
<?php Flight::render('admin/partials/bottom'); ?>
<!-- Page specific script -->
<script>

</script>
</body>
</html>
