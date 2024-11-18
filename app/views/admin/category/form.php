

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
                    <input type="text" value="<?php echo $category->displayName??null; ?>" name="name" class="form-control" id="name" placeholder="Enter Name" required>
                  </div>

                  <div class="form-group">
                    <label for="name">Alias</label>
                    <input type="text" value="<?php echo $category->aliasName??null; ?>" name="aliasName" class="form-control" id="aliasName" placeholder="Enter Alias" required>
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
function stringToSlug(str) {
    return str
        .toLowerCase()
        .trim()
        .replace(/\s+/g, '-')
        .replace(/[^\w\-]+/g, '')
        .replace(/\-\-+/g, '-')
        .replace(/^-+/, '')
        .replace(/-+$/, '');
}

const eleName = document.getElementById('name'),
      eleAlias = document.getElementById('aliasName')
eleName.addEventListener('keyup', function(event){
  eleAlias.value = stringToSlug(event.target.value)
})
</script>
</body>
</html>
