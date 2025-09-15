<?php
session_start();
require_once "../../connect/connectDb/config.php";
?>


<!DOCTYPE html>
<html lang="en" data-theme="shabd">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Testimonial Form</title>
     <link rel="stylesheet" href="../../css/<?php echo $cssfile; ?>">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>


     <div class="sector flex flex-column e-c m-y-30">

          <div class="flex e-c h-100per m-y-20 w-100per">
               <div class="form-box">
                    <div class="main-box">
                         <form action="./addTestimonial.php" enctype="multipart/form-data" method="POST">
                              <p class="fs-40 tx-center">Testimonial</p>

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

                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Rating</p>
                              <div class="input">
                                   <input type="number" min="1" max="5" name="rating" id="Rating" placeholder="1-5" required>
                              </div>


                              <p class="fs-10 tx-center m-20"> Please make sure to select the photo before Submit. </p>

                              <button type="submit" class="btn btn-gra-purple cursor-pointer" style="margin: 25px auto 5px;" name="Add_Testimonial">Submit</button>

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
</body>

</html>