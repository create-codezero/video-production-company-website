<?php
session_start();
$_SESSION['adminDPage'] = "Team";
require_once "../../connect/connectDb/config.php";
?>
<div class="sector flex flex-column e-c m-y-30">

     <div class="flex e-c h-100per m-y-20 w-100per">
          <div class="form-box">
               <div class="main-box">
                    <form action="./actions/addTeam.php" enctype="multipart/form-data" method="POST">
                         <p class="fs-40 tx-center">Details</p>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Name</p>
                         <div class="input">
                              <input type="text" name="name" id="Name" placeholder="Name" required>
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Position</p>
                         <div class="input">
                              <input type="text" name="position" id="Position" placeholder="Position" required>
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Description</p>
                         <div class="input">
                              <textarea name="description" id="Description" rows="5"></textarea>
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Profile</p>

                         <div class="w-100per flex e-c p-y-10">
                              <div class="flex e-c cursor-pointer" style="max-height:100px; height:100%; max-width:100px; width:100%; background-color: var(--clr-4); border-radius:100%;" onclick="triggerClick('Profile')">
                                   <img src="" alt="Channel Logo" class="none" style="height:100px; max-width:100px; width:100%; border-radius:100%;" id="channelLogoPreview">
                                   <i class="fa fa-camera fs-30 p-y-40 channelLogoIcon" id="upload-channelLogo-icon"></i>
                              </div>
                         </div>

                         <div class="input">
                              <input type="file" name="profile" style="display:none;" id="Profile" onchange="displayImage(this)" required>
                         </div>


                         <p class="fs-10 tx-center m-20"> This will be public once you click on Upload. </p>

                         <button type="submit" class="btn btn-gra-purple cursor-pointer" style="margin: 25px auto 5px;" name="Add_Team">Upload</button>




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
                    document.querySelector('#channelLogoPreview').setAttribute('src', e.target.result);
                    document.querySelector('#upload-channelLogo-icon').setAttribute('class', "fa fa-camera fs-30 p-y-40 videoInputThumbnailFile none");
                    document.querySelector('#channelLogoPreview').setAttribute('class', "img-fluid");

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