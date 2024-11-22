

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
  <div class="content-wrapper overflow-hidden">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User</h1>
            </div>
            <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo route('admin.dashboard.index'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">User</li>
                </ol> -->
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
                <span style="color:red;"><?php if($_GET['err']??false) echo "Please check, something wrong!" ?></span>
                 <div class="form-group">
                    <label for="name">Name</label>
                    <input required type="text" value="<?php echo $user->name??($_GET['name']??''); ?>" name="name" class="form-control" id="name" placeholder="Enter Name">
                  </div>

                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input required <?php if(!empty($user->email)) echo "readonly"; ?> type="email" name="email" value="<?php echo $user->email??($_GET['email']??''); ?>" class="form-control" id="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input value="<?php echo $_GET['password']??''; ?>" autocomplete="new-password" type="password" name="password" class="form-control" id="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input value="<?php echo $_GET['confirm_password']??''; ?>" autocomplete="new-password" type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password">
                    <span id="password_match_err" style="color:red;display:none;">Password must match!</span>
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
  let timeoutPass;
  $("#confirm_password").on("keyup", function(){
   clearTimeout(timeoutPass)
   timeoutPass = setTimeout(() => {
    if($("#confirm_password").val() != $("#password").val()){
      $('#password_match_err').show();
    }else{
      $('#password_match_err').hide();
    }
   }, 500)
  })
</script>
</body>
</html>
