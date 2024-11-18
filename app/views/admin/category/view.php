

<?php Flight::render('admin/partials/top'); ?>
  
  <?php Flight::render('admin/partials/navbar'); ?>

  <?php Flight::render('admin/partials/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $category->displayName; ?></h1>
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo route('admin.category.index'); ?>">Category</a></li>
              <li class="breadcrumb-item active">Articles</li>
            </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All the articles of this category are here</h3>
              </div>
              <div>
                <a class="m-2 btn btn-success btn-md pull-right" href="<?php echo route('admin.articles.create'); ?>?alias=<?php echo $category->aliasName; ?>">Create</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th></th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php foreach ($articles as $article) { ?>
                    <tr>
                      <td><?php echo $article->id; ?></td>
                      <td><img src="<?php echo $article->pic?get_url($article->pic):asset('/assets/images/no-image.jpg'); ?>" height="50" width="50" alt="" /> </td>
                      <td> <?php echo $article->name; ?> </td>
                      <td> <?php echo $article->date; ?> </td>
                      <td>
                      <a href="<?php echo route('admin.articles.edit',[
                        'id' => $article->id
                      ]); ?>">
                          <i class="fas fa-edit"></i>
                      </a>
                      <a class="text-danger mt-2" href="<?php echo route('admin.articles.delete',[
                        'id' => $article->id
                      ]); ?>">
                          <i class="fas fa-trash"></i>
                      </a>
                      
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php Flight::render('admin/partials/footer'); ?>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php Flight::render('admin/partials/bottom'); ?>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "order": [[1, 'desc']]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
</body>
</html>
