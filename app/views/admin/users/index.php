

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
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo route('admin.dashboard.index'); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Users</li>
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
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php foreach($users as $user ){ ?>
                    <tr>
                      <td><?php echo $user->id; ?></td>
                      <td> <?php echo $user->name; ?> </td>
                      <td> <?php echo $user->email; ?> </td>
                      <td></td>
                      <td>
                        <a href="<?php echo route('admin.users.edit',[
                          'id' => $user->id
                        ]); ?>">
                          <i class="fas fa-edit"></i>
                        </a>

                        <a href="javascript:void(0)" class="text-danger mt-2 delete_it" data-toggle="modal" data-target="#modal-default"
                        data-url="<?php echo route('admin.users.delete',[
                          'id' => $user->id
                        ]); ?>"
                      >
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

  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Are you sure to delete ?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <a href="" id="set_delete_url" class="btn btn-danger btn-sm">Confirm</a>
              <a href="javascript:void(0)" class="btn btn-success btn-sm" aria-label="Close" data-dismiss="modal">Cacnel</a>
            </div>
          </div>
        </div>
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
      "buttons": [
        {
          text:"Create",
          className: 'btn btn-success btn-md',
          action: function(){
            window.location.href = `<?php echo route('admin.users.create'); ?>`
          }
        }
      ],
      "order": [[1, 'desc']]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $(".delete_it").on('click', function(){
      $("#set_delete_url").attr('href',this.attributes['data-url'].nodeValue)
    })

  });
</script>
</body>
</html>
