

<?php Flight::render('admin/partials/top'); ?>
  
<?php Flight::render('admin/partials/navbar'); ?>

<?php Flight::render('admin/partials/sidebar'); ?>

<?php

if(!empty($category)){
    $actionUri = route('admin.category.update',[
      'id' => $category->id
    ]);
}else{
    $actionUri = route('admin.category.store');
}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

       <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo route('admin.dashboard.index'); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
                </div>
            </div>
        </section>

        <div class="row">
            <div class="col-md-6">
            <div class="card card-primary mx-4">
            <form action="<?php echo $actionUri; ?>" method="POST">   
                <div class="card-body">

                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" value="<?php echo $category->title??null; ?>" name="name" class="form-control" id="name" placeholder="Enter Name">
                  </div>

                  <div class="form-group">
                    <label for="serial">Serial</label>
                    <input type="number" value="<?php echo ($category->serial??0); ?>" name="serial" class="form-control" id="serial" placeholder="Enter Serial">
                  </div>

                  <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" <?php ($category->active??0)== 1 ? 'selected':'' ?>>
                            Active
                        </option>
                        <option value="0" <?php ($category->active??0)== 0 ? 'selected':'' ?>>
                            InActive
                        </option>
                    </select>
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
