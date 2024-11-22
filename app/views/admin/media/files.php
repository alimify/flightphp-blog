
<div class="card">
              <div class="card-body p-0">
                <table class="table">
                    
                  <tbody>
                    <tr>
                        <td>#</td>
                        <td></td>
                        <td>Name</td>
                        <td></td>
                    </tr>
                  <?php foreach ($files as $file) { ?>
                    <?php 
                        if($file->ext == 'jpg' || $file->ext == 'png' || $file->ext == 'jpeg' || $file->ext == 'gif'){
                            $fileUri = get_url($file->filepath);
                            $fileImg = "<img src='$fileUri' alt='' height='40' width='40'/>";
                        }else {
                            $fileImg = '<i style="font-size: 40px;color:#00b3bb;" class="fas fa-file"></i>';
                        }
                        $fileCode = "FILE_".$file->id."_FILE";
                    ?>
                    <tr>
                      <td><?php echo $file->id; ?></td>
                      <td>
                        <?php echo $fileImg; ?>
                      </td>
                      <td><?php echo $file->name; ?></td>
                      <td>
                      <a href="javascript:void(0)" onclick="
            navigator.clipboard.writeText('<?php echo $fileCode; ?>').then(function() {
                alert('File code has been copied to clipboard!');
            }).catch(function(err) {
                alert('Failed to copy: ' + err);
            });" class="btn btn-success btn-xs">Copy</a>

                    <a href="javascript:void(0)" data-id="<?php echo $file->id; ?>" class="delete-media-file btn btn-danger btn-xs">Delete</a>

                      </td>
                    </tr>
                    <?php } ?>

                  </tbody>
                </table>
              </div>
            </div>


<script>


</script>