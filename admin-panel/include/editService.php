<?php
session_start();
$_SESSION['adminDPage'] = "Service";

if (!isset($_GET['id']) && empty($_GET['id'])) {
     header('locaion: ./');
} else {
     $id = $_GET['id'];
}
?>
<div class="flex h-100vh e-c">

     <div class="form-box">
          <div class="main-box">
               <h1 class="fs-40 tx-center">Update Details</h1>

               <?php
               require_once '../../connect/connectDb/config.php';

               $gettingAllServices = "SELECT * FROM `shabd_services` WHERE `serviceId` = '$id'";
               $firegettingAllServices = mysqli_query($link, $gettingAllServices);

               if (mysqli_num_rows($firegettingAllServices) > 0) {
                    while ($serviceDetails = mysqli_fetch_assoc($firegettingAllServices)) {
               ?>

                         <form action="./actions/Service.php" class="e-center" method="POST" enctype="multipart/form-data">

                              <input type="text" value="<?php echo $serviceDetails['serviceId']; ?>" name="serviceId" class="none" required>

                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Service Name</p>
                              <div class="input">
                                   <input type="text" id="Name" name="name" value="<?php echo $serviceDetails['serviceName']; ?>" required>
                              </div>

                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Service Start At</p>
                              <div class="input">
                                   <input type="text" id="StartAt" value="<?php echo $serviceDetails['serviceStartAt']; ?>" name="startAt" required>
                              </div>

                              <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Service Description</p>
                              <div class="input">
                                   <textarea name="description" id="Description" rows="5"><?php echo $serviceDetails['serviceDescription']; ?></textarea>
                              </div>

                              <p style="font-size: 12px; font-weight: 500;" class="m-y-20 tx-center">This service will be public once you click Update.</p>

                              <button class="btn btn-gra-purple m-auto" type="submit" name="Update_Service">Update</button>
                         </form>
               <?php
                    }
               } else {
                    echo "No Service Available to show.";
               }
               ?>

          </div>
     </div>

</div>