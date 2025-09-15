<?php
session_start();
$_SESSION['adminDPage'] = "Winning-Service";
?>

<div class="flex e-c w-100per flex-d-column" style="min-height: 75vh;">
     <div class="m-y-20">
          <h1 class="fs-40 tx-center font-poppins">Winning Services</h1>
     </div>
     <div class="flex flex-d-column e-c" style="max-width: 600px; width:95%;">
          <div class="control-bar flex tx-left w-100per">
               <div class="flex e-c bg-clr-4 m-10 border-radius-100per pos-relative" style="width: 45px; height:45px;">
                    <a href="javascript:void(0)" onclick="loadContent('NewWinningService')" class="pos-absolute">
                         <p class="fs-20 p-10"><i class="fa fa-plus" aria-hidden="true"></i></p>
                    </a>
               </div>
          </div>
          <?php
          require_once '../../connect/connectDb/config.php';

          $gettingAllWinningServices = "SELECT * FROM `shabd_winning_services`";
          $firegettingAllWinningServices = mysqli_query($link, $gettingAllWinningServices);

          if (mysqli_num_rows($firegettingAllWinningServices) > 0) {
               while ($winningServiceDetails = mysqli_fetch_assoc($firegettingAllWinningServices)) {
          ?>
                    <div class="testimonial-control-card font-poppins e-c bg-clr-4 flex tx-left p-y-30 w-100per m-y-10" style="border-radius: 10px;" id="<?php echo $winningServiceDetails['id']; ?>">
                         <div class="flex flex-d-coloumn" style="justify-content:space-between; align-items:center; width:90%;">
                              <div class="flex flex-d-column">
                                   <p class="fs-20 fw-600"><?php echo $winningServiceDetails['title']; ?></p>
                                   <p class="fw-400" style="font-size: 13px;"><?php echo $winningServiceDetails['subTitle']; ?></p>
                                   <p class="m-t-10"><?php echo $winningServiceDetails['description']; ?></p>
                              </div>

                              <div class="flex flex-d-column cursor-pointer m-10">
                                   <a href="./actions/delete.php?db=winningServices&id=<?php echo $winningServiceDetails['id']; ?>">
                                        <p class="fs-30"><i class="fa fa-trash" aria-hidden="true"></i></p>
                                   </a>

                                   <a href="javascript:void(0)" onclick="editLoad('editWinningService','<?php echo $winningServiceDetails['id']; ?>')" class="m-t-10">
                                        <p class="fs-30"><i class="fas fa-edit    "></i></p>
                                   </a>
                              </div>
                         </div>
                    </div>
          <?php
               }
          } else {
               echo "No Winning Services Available to show.";
          }
          ?>



     </div>
</div>