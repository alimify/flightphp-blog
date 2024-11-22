<div class="container mt-2">
  <div class="container">
    <form>
      <fieldset class="upload_dropZone text-center mb-3 p-4">
        <svg class="upload_svg" width="60" height="60" aria-hidden="true">
          <use href="#icon-imageUpload"></use>
        </svg>
        <p class="small my-2">Drag &amp; Drop</p>
        <input accept=".jpg, .jpeg, .png, .gif, .pdf, .doc, .docx, .tiff, .tif, .rtf, .rar, .zip" id="upload_file_drop" data-post-name="file_drop" data-post-url="<?php echo route('admin.media.upload_files'); ?>" class="position-absolute invisible" type="file" multiple />
        <label class="btn btn-upload mb-3" for="upload_file_drop">Choose file(s)</label>
        <!-- <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div> -->
        <div id="progress-report" style="display: none;">
          <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
          <h3 id="status" style="font-size: 10px;"></h3>
          <p id="loaded_n_total"></p>
        </div>
      </fieldset>
    </form>
    <svg style="display:none">
      <defs>
        <symbol id="icon-imageUpload" clip-rule="evenodd" viewBox="0 0 96 96">
          <path d="M47 6a21 21 0 0 0-12.3 3.8c-2.7 2.1-4.4 5-4.7 7.1-5.8 1.2-10.3 5.6-10.3 10.6 0 6 5.8 11 13 11h12.6V22.7l-7.1 6.8c-.4.3-.9.5-1.4.5-1 0-2-.8-2-1.7 0-.4.3-.9.6-1.2l10.3-8.8c.3-.4.8-.6 1.3-.6.6 0 1 .2 1.4.6l10.2 8.8c.4.3.6.8.6 1.2 0 1-.9 1.7-2 1.7-.5 0-1-.2-1.3-.5l-7.2-6.8v15.6h14.4c6.1 0 11.2-4.1 11.2-9.4 0-5-4-8.8-9.5-9.4C63.8 11.8 56 5.8 47 6Zm-1.7 42.7V38.4h3.4v10.3c0 .8-.7 1.5-1.7 1.5s-1.7-.7-1.7-1.5Z M27 49c-4 0-7 2-7 6v29c0 3 3 6 6 6h42c3 0 6-3 6-6V55c0-4-3-6-7-6H28Zm41 3c1 0 3 1 3 3v19l-13-6a2 2 0 0 0-2 0L44 79l-10-5a2 2 0 0 0-2 0l-9 7V55c0-2 2-3 4-3h41Z M40 62c0 2-2 4-5 4s-5-2-5-4 2-4 5-4 5 2 5 4Z" />
        </symbol>
      </defs>
    </svg>
  </div>
  <div class="container" id="files"></div>

  <div class="modal fade" id="file-delete-modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Are you sure to delete ?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <a href="javascript:void(0)" id="set_file_delete_url" class="btn btn-danger btn-sm">Confirm</a>
              <a href="javascript:void(0)" class="btn btn-success btn-sm" aria-label="Close" data-dismiss="modal">Cacnel</a>
            </div>
          </div>
        </div>
 </div>



</div>


<style>

/* Bootstrap 5 CSS and icons included */
:root {
  --colorPrimaryNormal: #00b3bb;
  --colorPrimaryDark: #00979f;
  --colorPrimaryGlare: #00cdd7;
  --colorPrimaryHalf: #80d9dd;
  --colorPrimaryQuarter: #bfecee;
  --colorPrimaryEighth: #dff5f7;
  --colorPrimaryPale: #f3f5f7;
  --colorPrimarySeparator: #f3f5f7;
  --colorPrimaryOutline: #dff5f7;
  --colorButtonNormal: #00b3bb;
  --colorButtonHover: #00cdd7;
  --colorLinkNormal: #00979f;
  --colorLinkHover: #00cdd7;
}

.upload_dropZone {
  color: #0f3c4b;
  background-color: var(--colorPrimaryPale, #c8dadf);
  outline: 2px dashed var(--colorPrimaryHalf, #c1ddef);
  outline-offset: -12px;
  transition:
    outline-offset 0.2s ease-out,
    outline-color 0.3s ease-in-out,
    background-color 0.2s ease-out;
}
.upload_dropZone.highlight {
  outline-offset: -4px;
  outline-color: var(--colorPrimaryNormal, #0576bd);
  background-color: var(--colorPrimaryEighth, #c8dadf);
}
.upload_svg {
  fill: var(--colorPrimaryNormal, #0576bd);
}
.btn-upload {
  color: #fff;
  background-color: var(--colorPrimaryNormal);
}
.btn-upload:hover,
.btn-upload:focus {
  color: #fff;
  background-color: var(--colorPrimaryGlare);
}
.upload_img {
  width: calc(33.333% - (2rem / 3));
  object-fit: contain;
}

#progress-report progress {
  width: 100%;
  height: 30px;
}
#progress-report progress::-webkit-progress-bar {
  background-color: var(--colorPrimaryNormal);
  border-radius: 10px;
}
#progress-report progress::-webkit-progress-value {
  background-color: var(--colorPrimaryNormal);
  border-radius: 10px;
}
#progress-report progress::-moz-progress-bar {
  background-color: var(--colorPrimaryNormal);
  border-radius: 10px;
}

</style>

<script>
('use strict');


(function () {

  'use strict';
  
  const preventDefaults = event => {
    event.preventDefault();
    event.stopPropagation();
  };

  const highlight = event =>
    event.target.classList.add('highlight');
  
  const unhighlight = event =>
    event.target.classList.remove('highlight');

  const getInputAndGalleryRefs = element => {
    const zone = element.closest('.upload_dropZone') || false;
    const gallery = zone.querySelector('.upload_gallery') || false;
    const input = zone.querySelector('input[type="file"]') || false;
    return {input: input, gallery: gallery};
  }

  const handleDrop = event => {
    const dataRefs = getInputAndGalleryRefs(event.target);
    dataRefs.files = event.dataTransfer.files;
    handleFiles(dataRefs);
  }


  const eventHandlers = zone => {

    const dataRefs = getInputAndGalleryRefs(zone);

    if (!dataRefs.input) return;

    // Prevent default drag behaviors
    ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(event => {
      zone.addEventListener(event, preventDefaults, false);
      document.body.addEventListener(event, preventDefaults, false);
    });

    // Highlighting drop area when item is dragged over it
    ;['dragenter', 'dragover'].forEach(event => {
      zone.addEventListener(event, highlight, false);
    });
    ;['dragleave', 'drop'].forEach(event => {
      zone.addEventListener(event, unhighlight, false);
    });

    // Handle dropped files
    zone.addEventListener('drop', handleDrop, false);

    // Handle browse selected files
    dataRefs.input.addEventListener('change', event => {
      dataRefs.files = event.target.files;
      handleFiles(dataRefs);
    }, false);

  }


  // Initialise ALL dropzones
  const dropZones = document.querySelectorAll('.upload_dropZone');
  for (const zone of dropZones) {
    eventHandlers(zone);
  }

  const checkFileTypes = file => 
    ['image/jpeg', 'image/png', 'image/svg+xml'].includes(file.type) || true;

  const uploadFiles = dataRefs => {

    // Multiple source routes, so double check validity
    if (!dataRefs.files || !dataRefs.input) return;

    const url = dataRefs.input.getAttribute('data-post-url');
    if (!url) return;

    const name = dataRefs.input.getAttribute('data-post-name');
    if (!name) return;

    const alias = document.getElementById('alias').value
    const aliasId = document.getElementById('aliasId').value

    const formData = new FormData();
    formData.append('tag',`${alias+aliasId}`)
    dataRefs.files.forEach((file) => {
      formData.append(`${name}[]`, file);
    })
  
    var xhr = new XMLHttpRequest();
    xhr.upload.addEventListener('progress', function(event) {
                if (event.lengthComputable) {
                    var percentComplete = (event.loaded / event.total) * 100;
                    console.log(percentComplete,'percent complete')

                    document.getElementById('progress-report').style.display = ""
                    document.getElementById('progressBar').value = percentComplete;
                    document.getElementById('status').textContent = Math.round(percentComplete) + '%';
                    // document.getElementById("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
                }
    });

    xhr.addEventListener("load", function(event){
      document.getElementById('progressBar').value = 0;
      document.getElementById('status').textContent = '0%';
      document.getElementById('progress-report').style.display = "none"
    }, false);

    xhr.onload = function() {
      if (xhr.status === 200) {
        // Successful upload
        loadFiles()
      } else {
        // Failed upload
        console.log('URL: ', url, '  name: ', name)
      }
    };

    xhr.onerror = function() {
      console.log('err to upload')
    };

    xhr.open('POST', url)
    xhr.send(formData)

  }


  // Handle both selected and dropped files
  const handleFiles = dataRefs => {

    let files = [...dataRefs.files];

    // Remove unaccepted file types
    files = files.filter(item => {
      if (!checkFileTypes(item)) {
        console.log('media file, ', item.type);
      }
      return checkFileTypes(item) ? item : null;
    });

    if (!files.length) return;
    dataRefs.files = files;

    uploadFiles(dataRefs);
  }


  const loadFiles = () => {
    let filesEle = document.getElementById('files') 
    filesEle.innerHTML = ''
    const alias = document.getElementById('alias').value
    const aliasId = document.getElementById('aliasId').value

    fetch('<?php echo route('admin.media.files'); ?>?alias='+`${alias}&aliasId=${aliasId}`).then((response) => response.text()).then((html) => {
      filesEle.innerHTML = html
    }).catch((error) => {
      console.log('error media files')
    })
  }
  loadFiles();


  // deleting file
  let deletingFileId = null
  const filesEleForDelete = document.getElementById('files')
  filesEleForDelete.addEventListener('click', function(event){
    console.log('datafileid', event.target.classList.contains('delete-media-file'))
    if(event.target.classList.contains('delete-media-file')){
      deletingFileId = event.target.getAttribute('data-fileid')
    if(deletingFileId){
      $("#file-delete-modal").modal()
    }
    }
  })

  const deleteFileConfirmed = document.getElementById('set_file_delete_url')
  deleteFileConfirmed.addEventListener('click', function(){

    fetch('<?php echo route('admin.media.delete',['id' => 'string']); ?>'.replace('string',deletingFileId),{
      method: 'GET'
    }).then((response) => response.json()).then((jsnRes) => {
      $("#file-delete-modal").modal('hide')
      if(jsnRes.success){
        loadFiles()
      }
    }).catch((error) => {
      console.log('error media file delete')
      $("#file-delete-modal").modal('hide')
    })

  })

})();



</script>