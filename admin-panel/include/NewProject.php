<?php
session_start();
$_SESSION['adminDPage'] = "Projects";
require_once "../../connect/connectDb/config.php";
?>
<div class="sector flex flex-column e-c m-y-30">

     <div class="flex e-c h-100per m-y-20 w-100per">
          <div class="form-box">
               <div class="main-box">
                    <form action="./actions/addProject.php" enctype="multipart/form-data" method="POST">
                         <p class="fs-40 tx-center">Details</p>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Project Name</p>
                         <div class="input">
                              <input type="text" name="name" id="Name" placeholder="Name" required>
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Project File Link</p>
                         <div class="input">
                              <input type="text" name="file" id="File" placeholder="File" required>
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Project Description</p>
                         <div class="input">
                              <textarea name="description" id="Description" rows="5"></textarea>
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Project Tags</p>
                         <div class="input">
                              <textarea name="tags" id="Tags" rows="5"></textarea>
                         </div>

                         <p class=" fs-15 fw-500 videoInputThumbnailFile" style="margin-top: 20px; margin-left: 2px;">Select Photo</p>

                         <div class="input videoInputThumbnailFile pos-relative flex e-c cursor-pointer" onclick="triggerClick('Photo-File')" title="Click to select your thumbnail Image.">
                              <i class="fa fa-camera fs-30 p-y-40 videoInputThumbnailFile" id="upload-thumbnail-icon"></i>
                              <img src="" class="none videoInputThumbnailFileView img-fluid" id="Thumbnail-Viewer">
                              <input type="file" name="photoFile" onchange="displayImage(this)" id="Photo-File" placeholder="Photo File" accept="image/png, image/jpg, image/jpeg" style="display: none;" required>
                         </div>

                         <p class="fs-10 tx-center m-20"> This will be public once you click on Upload. </p>

                         <button type="submit" class="btn btn-gra-purple cursor-pointer" style="margin: 25px auto 5px;" name="Add_Project">Upload</button>




                    </form>
               </div>
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