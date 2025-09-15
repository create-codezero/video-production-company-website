<?php
session_start();
$_SESSION['adminDPage'] = "Faq";
?>
<div class="flex h-100vh e-c">

     <div class="form-box">
          <div class="main-box">
               <h1 class="fs-40 tx-center">Enter Details</h1>

               <form action="./actions/addFaq.php" class="e-center" method="POST" enctype="multipart/form-data">

                    <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Question</p>
                    <div class="input">
                         <input type="text" id="Question" name="question" required>
                    </div>

                    <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Answer</p>
                    <div class="input">
                         <textarea name="answer" id="Answer" rows="5"></textarea>
                    </div>

                    <p style="font-size: 12px; font-weight: 500;" class="m-y-20 tx-center">This FAQ will be public once you click Add.</p>

                    <button class="btn btn-gra-purple m-auto" type="submit" name="Add_Faq">Add</button>
               </form>


          </div>
     </div>

</div>