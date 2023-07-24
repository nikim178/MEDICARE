<?php
include('includes/pheader.php');
?>

<div id="content" class="mainbody" class="p-0 p-md-0 pt-0" style="margin-left:10vw;">
  
<div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>
                         
                                <?php
                            if($_SERVER['REQUEST_METHOD']=='POST'){
                                $aname=$_POST['aname'];
                                $aemail=$_POST['aemail'];

                                $aphone=$_POST['aphone'];
                                $adate=$_POST['adate'];
                                $time = $_POST['time'];
                                $doctor=$_POST['doctor'];
                          
                                echo"entered successfully";

                            }
                        ?>

                                <form role="form" action="Pbooking.php" method="post" >
                                  
                                  <input name="pid" type="hidden" value=<?php echo $pid; ?> />
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <input type="text" name="aname" id="name" class="form-control" placeholder="Full name" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="email" name="aemail" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-4">
                                            <input type="number" name="aphone" id="phone" class="form-control" placeholder="Phone: 123-456-7890">
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input  type="date" name="adate" id="date" value="" class="form-control" min=<?php echo date('Y-m-d'); ?>>
                                            
                                        </div>
                                      
                                       
                                        <div  class="col-lg-6 col-12 mt-1" class="dropdown">
                                            <label>Select Doctor</label>
                                            <div class="text-bar5" class="form-control">
                                                    <select  id="bgroup"  name="doctor" >
                                                    <?php
                                                      $sql2="SELECT * FROM `doctor`";
                                                      $result_sql2 = mysqli_query($mysqli, $sql2);
                                                      if(mysqli_num_rows($result_sql2) > 0){
                                                            while($row2 = mysqli_fetch_assoc($result_sql2)){
                                                              
                                                          
                                                      ?>
                                                    
                                                    <option value=<?php echo $row2['did'].'_'.$row2['fname']; ?>><span>Dr. <?php echo $row2['fname']; ?> <?php echo $row2['lname']; ?></span></option>
                                                    <?php
                                                        
                                                      }
                                                    }
                                                    ?>
                                                    </select><br>
                                                </div>
                                         </div>
                                        
                                        
                                        <div class="col-lg-6 col-12">
                                        <label>Select Time</label>  
                                        <input type="time" class="form-control" value="<?php $time = date("H:i", strtotime($row['time'])); echo "$time"; ?>" id="time" name="time" />
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button type="submit" class="btn btn-primary" id="submit-button">Book Now</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
</div>
<?php
include('includes/script.php');
?>