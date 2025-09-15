<?php
session_start();
$_SESSION['adminDPage'] = "Winning-Service";
if (!isset($_GET['id']) && empty($_GET['id'])) {
     header('locaion: ./');
} else {
     $id = $_GET['id'];
}
?>

<div class="flex e-c">

     <div class="form-box">
          <div class="main-box">
               <h1 class="fs-40 tx-center">Update Details</h1>
               <?php
               require_once '../../connect/connectDb/config.php';

               $gettingAllWinningServices = "SELECT * FROM `shabd_winning_services` WHERE `id` = '$id'";
               $firegettingAllWinningServices = mysqli_query($link, $gettingAllWinningServices);

               if (mysqli_num_rows($firegettingAllWinningServices) > 0) {
                    while ($winningServiceDetails = mysqli_fetch_assoc($firegettingAllWinningServices)) {
               ?>
                         <form action="./actions/WinnigService.php" class="e-center" method="POST" enctype="multipart/form-data">

                              <input type="text" value="<?php echo $winningServiceDetails['id']; ?>" name="winningServiceId" class="none" required>

                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Icon Class</p>
                              <div class="input">
                                   <input type="text" id="IconClass" name="iconclass" value="<?php echo $winningServiceDetails['iconClass']; ?>" required>
                              </div>

                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Sub Title</p>
                              <div class="input">
                                   <input type="text" id="SubTitle" name="subtitle" value="<?php echo $winningServiceDetails['subTitle']; ?>" required>
                              </div>

                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Title</p>
                              <div class="input">
                                   <input type="text" id="Title" name="title" value="<?php echo $winningServiceDetails['title']; ?>" required>
                              </div>

                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Service Description</p>
                              <div class="input">
                                   <textarea name="description" id="Description" rows="5"><?php echo $winningServiceDetails['description']; ?></textarea>
                              </div>

                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Button Text</p>
                              <div class="input">
                                   <input type="text" id="ButtonText" value="<?php echo $winningServiceDetails['buttonText']; ?>" name="buttontext" required>
                              </div>

                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Button Link</p>
                              <div class="input">
                                   <input type="text" id="ButtonLink" value="<?php echo $winningServiceDetails['buttonLink']; ?>" name="buttonlink" required>
                              </div>

                              <p style="font-size: 12px; font-weight: 500;" class="m-y-20 tx-center">This Winning Service will be public once you click Add.</p>

                              <button class="btn btn-gra-purple m-auto" type="submit" name="Update_Winning_Service">Update</button>
                         </form>

               <?php
                    }
               } else {
                    echo "No Winning Service Available to show.";
               }
               ?>
          </div>
     </div>

</div>