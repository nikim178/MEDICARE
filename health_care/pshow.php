<?php
include('includes/pheader.php');
?>


<div id="content" class="mainbody" class="p-0 p-md-0 pt-0" style="margin-left:10vw;">
<div class="main-content">
            <div class="container">
              <h1> Booked Appointments</h1>
              <br>
              <br>

              <div class="row">
                <?php
                  $sql3="SELECT * FROM `pappointment` WHERE `pid`=$pid";
                  $result_sql3=mysqli_query($mysqli, $sql3);
                  if(mysqli_num_rows($result_sql3) > 0){
                    while($row3=mysqli_fetch_assoc($result_sql3)){
                        if(strtotime($row3['adate'])>=strtotime(date('Y-m-d'))){

                       
                   
                ?>
                <div class="col-sm-6 col-md-6 col-lg-4">
                  <div class="card bg-white p-3 mb-4 shadow">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="user-info">
                        
                        <div class="user-info__basic">
                          <h5 name="name" class="mb-0">Dr. <?php echo $row3['doctor']?></h5>
                          
                        </div>
                      </div>
                      <div class="dropdown open">
                        <a href="pappointment_delete.php?aid=<?php echo $row3['aid'] ; ?>" >
                        <img src="images/x-mark-24.png"></img>
                        </a>
                        
                      </div>
                    </div>
                    <h6 name="contact" class="mb-0"><?php echo $row3['phone']?></h6>
                    <a href="#!"><small>Contact</small></a>
                    <div class="d-flex justify-content-between mt-4">
                      <div>
                        <h5 class="mb-0">
                          <small name="date" class="ml-1"><?php echo $row3['adate']?></small>
                        </h5>
                      </div>
                      <h5 class="mb-0">
                          <small name="time" class="ml-1"><?php echo $row3['time']?></small>
                        </h5>
                    </div>
                  </div>
                </div>
                <?php
                   }
                  }

                  }
                  else{
                    echo '<div style="text-align: center;">No data found</div>';
                  }
                  ?>
              </div>
              
            </div>
                </div>
    </div>
<?php
include('includes/script.php');
?>