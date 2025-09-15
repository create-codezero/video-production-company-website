<?php
session_start();
$_SESSION['adminDPage'] = "UserAsked";
?>

<div class="flex e-c w-100per flex-d-column" style="min-height: 75vh;">
     <div class="m-y-20">
          <h1 class="fs-40 tx-center font-poppins">User Queries</h1>
     </div>
     <div class="flex flex-d-column e-c" style="max-width: 600px; width:95%;">
          <?php
          require_once '../../connect/connectDb/config.php';

          $getttingAllFaq = "SELECT * FROM `shabd_user_asked`";
          $firegetttingAllFaq = mysqli_query($link, $getttingAllFaq);

          if (mysqli_num_rows($firegetttingAllFaq) > 0) {
               while ($faqDetails = mysqli_fetch_assoc($firegetttingAllFaq)) {
          ?>
                    <div class="testimonial-control-card font-poppins e-c bg-clr-4 flex tx-left p-y-30 w-100per m-y-10" style="border-radius: 10px;" id="<?php echo $faqDetails['faqId']; ?>">
                         <div class="flex flex-d-coloumn" style="justify-content:space-between; align-items:center; width:90%;">
                              <div class="flex flex-d-column">
                                   <p class="fs-20 fw-600"><?php echo $faqDetails['userName']; ?></p>
                                   <p><?php echo $faqDetails['userEmail']; ?></p>
                                   <p class="m-t-10">Question: <?php echo $faqDetails['askedQuestion']; ?></p>
                              </div>

                              <div class="flex flex-d-column cursor-pointer m-10">
                                   <a href="mailto:<?php echo $faqDetails['userEmail']; ?>">
                                        <p class="fs-30"><i class="fa fa-envelope"></i></p>
                                   </a>
                              </div>
                         </div>
                    </div>
          <?php
               }
          } else {
               echo "No Queries Available to show.";
          }
          ?>



     </div>
</div>