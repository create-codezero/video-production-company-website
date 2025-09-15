<?php
session_start();
$_SESSION['adminDPage'] = "Email-List";
?>
<div class="flex h-100vh e-c">

     <div class="form-box">
          <div class="main-box">
               <h1 class="fs-40 tx-center">Enter Details</h1>

               <form action="./actions/addEmail.php" class="e-center" method="POST" enctype="multipart/form-data">

                    <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Name</p>
                    <div class="input">
                         <input type="text" id="Name" name="name" required>
                    </div>

                    <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Email</p>
                    <div class="input">
                         <input type="email" id="Email" name="email" required>
                    </div>

                    <p style="font-size: 12px; font-weight: 500;" class="m-y-20 tx-center">This FAQ will be public once you click Add.</p>

                    <button class="btn btn-gra-purple m-auto" type="submit" name="Add_Email">Add</button>
               </form>


          </div>
     </div>

</div>