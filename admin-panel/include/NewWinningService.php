<?php
session_start();
$_SESSION['adminDPage'] = "Winning-Service";
?>

<div class="flex e-c">

     <div class="form-box">
          <div class="main-box">
               <h1 class="fs-40 tx-center">Enter Detail</h1>

               <form action="./actions/WinnigService.php" class="e-center" method="POST" enctype="multipart/form-data">

                    <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Icon Class</p>
                    <div class="input">
                         <input type="text" id="IconClass" name="iconclass" required>
                    </div>

                    <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Sub Title</p>
                    <div class="input">
                         <input type="text" id="SubTitle" name="subtitle" required>
                    </div>

                    <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Title</p>
                    <div class="input">
                         <input type="text" id="Title" name="title" required>
                    </div>

                    <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Service Description</p>
                    <div class="input">
                         <textarea name="description" id="Description" rows="5"></textarea>
                    </div>

                    <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Button Text</p>
                    <div class="input">
                         <input type="text" id="ButtonText" name="buttontext" required>
                    </div>

                    <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Button Link</p>
                    <div class="input">
                         <input type="text" id="ButtonLink" name="buttonlink" required>
                    </div>

                    <p style="font-size: 12px; font-weight: 500;" class="m-y-20 tx-center">This service will be public once you click Add.</p>

                    <button class="btn btn-gra-purple m-auto" type="submit" name="Add_Winning_Service">Add</button>
               </form>


          </div>
     </div>

</div>