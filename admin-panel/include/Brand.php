<?php
session_start();
require_once "../../connect/connectDb/config.php";
$_SESSION['adminDPage'] = "Brand";
?>
<div class="flex e-c p-y-40" style="min-height: 75vh;">
     <div class="form-box">
          <div class="main-box">
               <form class="m-t-20" enctype="multipart/form-data" method="POST" action="./actions/addBrand.php">
                    <p class="fs-20 tx-center">Video Details</p>

                    <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Brand Name</p>
                    <div class="input">
                         <input type="text" name="brandTitle" id="BrandTitle" placeholder="Brand Title" title="Please a give title for this Brand." required>
                    </div>


                    <p class=" fs-15 fw-500 videoInputThumbnailFile" style="margin-top: 20px; margin-left: 2px;">Select Brand Logo</p>

                    <div class="input videoInputThumbnailFile pos-relative flex e-c cursor-pointer" onclick="triggerClick('Brand-File')" title="Click to select your thumbnail Image.">
                         <i class="fa fa-camera fs-30 p-y-40 videoInputThumbnailFile" id="upload-thumbnail-icon"></i>
                         <img src="" class="none videoInputThumbnailFileView img-fluid" id="Thumbnail-Viewer">
                         <input type="file" name="brandFile" onchange="displayImage(this)" id="Brand-File" placeholder="Photo File" accept="image/png, image/jpg, image/jpeg" style="display: none;" required>
                    </div>


                    <p class=" fs-10 tx-center m-t-10"> This Photo will be public once you click upload here. </p>


                    <button class="btn btn-gra-purple cursor-pointer" style="margin: 20px auto 10px;" type="submit" name="Upload_Brand">Upload</button>
               </form>
          </div>
     </div>
</div>


<script>
     function displayImage(e) {
          if (e.files[0]) {
               var reader = new FileReader();
               reader.onload = function(e) {
                    document.querySelector('#Thumbnail-Viewer').setAttribute('src', e.target.result);
                    document.querySelector('#upload-thumbnail-icon').setAttribute('class', "fa fa-camera fs-30 p-y-40 videoInputThumbnailFile none");
                    document.querySelector("#Thumbnail-Viewer").setAttribute('class', "videoInputThumbnailFileView img-fluid");

               }
               reader.readAsDataURL(e.files[0]);
          }
     }

     function triggerClick(e) {
          let id = e;
          if (id == "Upload-Post-Image") {
               document.querySelector('#Photo-Uploader-Btn').setAttribute('class', "p-y-10 input-btn cursor-pointer");
               document.querySelector("#PostImageViewer").setAttribute('class', "none");
               document.getElementById('ImageInputContainer').innerHTML = `<input type="file" style="display: none;" accept="image/png, image/jpg, image/jpeg" name="postImage" id="Upload-Post-Image" onchange="displayPostImage(this)">`;
          }
          document.querySelector(`#${id}`).click();
     }
</script>