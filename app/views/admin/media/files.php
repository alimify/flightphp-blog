

<div class="row text-center">
    <?php foreach ($files as $file) { ?>

    <div class="col-md-4 mb-4">
        <?php 
        if($file->ext == 'jpg' || $file->ext == 'png' || $file->ext == 'jpeg' || $file->ext == 'gif'){
            $fileUri = get_url($file->filepath);
            echo "<img src='$fileUri' alt='' height='50' width='50'/>";
        }else {
            echo '<i style="font-size: 50px;color:#00b3bb;" class="fas fa-file"></i>';
        }
        $fileCode = "FILE_".$file->id."_FILE";

        ?>
        <div>
            <?php echo $file->name; ?>
        </div>
        <div>
            <input type="text" value="<?php echo $fileCode; ?>" readonly size="5"/>
        </div>
        <div class="mt-1">
            <a href="javascript:void(0)" onclick="
            navigator.clipboard.writeText('<?php echo $fileCode; ?>').then(function() {
                alert('File code has been copied to clipboard!');
            }).catch(function(err) {
                alert('Failed to copy: ' + err);
            });" class="btn btn-success btn-xs">Copy</a>
        </div>
    </div>
    
    <?php } ?>
</div>