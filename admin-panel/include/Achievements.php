<?php
session_start();
$_SESSION['adminDPage'] = "Achievements";
?>
<div class="flex e-c m-y-30 flex-d-column">

     <?php
     require_once '../../connect/connectDb/config.php';

     $gettingAchievementDetails = "SELECT * FROM `shabd_achievement` ORDER BY `achievementId` DESC LIMIT 0,1";
     $fireAchievementDetails = mysqli_query($link, $gettingAchievementDetails);

     if (mysqli_num_rows($fireAchievementDetails) > 0) {
          while ($AchievementDetails = mysqli_fetch_assoc($fireAchievementDetails)) {
     ?>


               <div class="flex m-y-20 flex-wrap e-c font-poppins">
                    <div class="flex flex-d-column bg-clr-4 p-20 tx-center m-10" style="border-radius: 10px;">
                         <p><?php echo $AchievementDetails['achievement1Num']; ?></p>
                         <p class="fs-20 fw-600"><?php echo $AchievementDetails['achievement1Title']; ?></p>
                    </div>
                    <div class="flex flex-d-column bg-clr-4 p-20 tx-center m-10" style="border-radius: 10px;">
                         <p><?php echo $AchievementDetails['achievement2Num']; ?></p>
                         <p class="fs-20 fw-600"><?php echo $AchievementDetails['achievement2Title']; ?></p>
                    </div>

                    <div class="flex flex-d-column bg-clr-4 p-20 tx-center m-10" style="border-radius: 10px;">
                         <p><?php echo $AchievementDetails['achievement3Num']; ?></p>
                         <p class="fs-20 fw-600"><?php echo $AchievementDetails['achievement3Title']; ?></p>
                    </div>

                    <div class="flex flex-d-column bg-clr-4 p-20 tx-center m-10" style="border-radius: 10px;">
                         <p><?php echo $AchievementDetails['achievement4Num']; ?></p>
                         <p class="fs-20 fw-600"><?php echo $AchievementDetails['achievement4Title']; ?></p>
                    </div>
               </div>

               <!-- Form -->

               <div class="form-box">
                    <div class="main-box">
                         <h1 class="fs-40 tx-center">Enter Detail</h1>

                         <form action="./actions/updateAchievements.php" class="e-center" method="POST" enctype="multipart/form-data">

                              <input type="text" name="achievementId" value="<?php echo $AchievementDetails['achievementId']; ?>" class="none" required>

                              <!-- First Achievement -->
                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Title</p>
                              <div class="input">
                                   <input type="text" id="Title1" name="title1" value="<?php echo $AchievementDetails['achievement1Title']; ?>" required>
                              </div>

                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Numbers</p>
                              <div class="input">
                                   <input type="text" id="Number1" name="number1" value="<?php echo $AchievementDetails['achievement1Num']; ?>" required>
                              </div>

                              <!-- Second Achievement -->

                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Title</p>
                              <div class="input">
                                   <input type="text" id="Title2" name="title2" value="<?php echo $AchievementDetails['achievement2Title']; ?>" required>
                              </div>

                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Numbers</p>
                              <div class="input">
                                   <input type="text" id="Number2" name="number2" value="<?php echo $AchievementDetails['achievement2Num']; ?>" required>
                              </div>

                              <!-- Third Achievement -->
                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Title</p>
                              <div class="input">
                                   <input type="text" id="Title3" name="title3" value="<?php echo $AchievementDetails['achievement3Title']; ?>" required>
                              </div>

                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Numbers</p>
                              <div class="input">
                                   <input type="text" id="Number3" name="number3" value="<?php echo $AchievementDetails['achievement3Num']; ?>" required>
                              </div>

                              <!-- Fourth Achievement -->
                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Title</p>
                              <div class="input">
                                   <input type="text" id="Title4" name="title4" value="<?php echo $AchievementDetails['achievement4Title']; ?>" required>
                              </div>

                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Numbers</p>
                              <div class="input">
                                   <input type="text" id="Number4" name="number4" value="<?php echo $AchievementDetails['achievement4Num']; ?>" required>
                              </div>





                              <p style="font-size: 12px; font-weight: 500;" class="m-y-20 tx-center">This is data will be public once you click Add.</p>

                              <button class="btn btn-gra-purple m-auto" type="submit" name="Update_Achievements">Update</button>
                         </form>


                    </div>
               </div>

     <?php
          }
     } else {
          echo "Please Add Achievement Details in Database First.";
     }
     ?>

</div>