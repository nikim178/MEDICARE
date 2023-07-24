<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mongolian&display=swap" rel="stylesheet">

    
   
</head>
<body>
    <div class="container"> 
        <div class="card border-0">
             <div class="row g-0">
              <div class="col-md-6">
                <div class="h-100 d-flex justify-content-center align-items-center"> 
                    <div class="py-4 px-3 mt-5"> 
                        <h4 style="font-family: 'Noto Sans Mongolian', sans-serif; font-size:35px; color:#8B93E8;">Create your account</h4> 
                        <span style="font-family: 'Noto Sans Mongolian', sans-serif; font-size:15px; color:grey;">Enter fields below to get started</span>
                        <?php
                            if($_SERVER['REQUEST_METHOD']=='POST'){
                                $fname=$_POST['input1'];
                                $lname=$_POST['input2'];
                                $gender=$_POST['gender'];
                                $age=$_POST['input4'];
                                $height=$_POST['input5'];
                                $weight=$_POST['input6'];
                                $bgroup=$_POST['bgroup'];
                                $gid=$_POST['input8'];
                                $state=$_POST['state'];
                                $address=$_POST['input9'];
                                $email=$_POST['input10'];
                                $password=$_POST['input11'];
                                echo"entered successfully";

                            }
                        ?>

            <form action="Bpregistration.php" method="post">
                <div class="row g-2 mt-1">
                    <div class="col-md-6"> 
                        <div class="input-field"> 
                            <input type="text" class="form-control" id="input1" required name="input1">
                                <label for="input1">First Name</label>
                                    </div> 
                                    </div> 
                                     <div class="col-md-6"> <div class="input-field"> 
                                        <input type="text" class="form-control" id="input2" name="input2" required>
                                         <label for="input2">Last Name</label> 
                                        </div> 
                                    </div> 
                                </div> 
                                <div class="row g-2 mt-1">
                                    <div class="col-md-6"> 
                                        <div class="rdio rdio-primary radio-inline"> 
                                            
                                            <input name="gender" value="Male" id="gender1"  type="radio" <?php if (isset($gender) && $gender=="female") echo "checked";?>  checked>
                                            <label for="gender1">Male</label>
                                        
                                            <input name="gender" value="Female" id="gender2" type="radio" <?php if (isset($gender) && $gender=="male") echo "checked";?>>
                                            <label for="gender2">Female</label>
                                                     </div> 
                                                    </div> 
                                <div class="col-md-6"> 
                                    <div class="input-field"> 
                                        <input type="number" class="form-control" id="input4"  min="0" max="100" name="input4" required>
                                            <label for="input4">Age</label> 
                                                </div> 
                                            </div> 
                                        </div>
                            <div class="row g-2 mt-1">
                                <div class="col-md-6"> 
                                     <div class="input-field"> 
                                        <input type="Number" class="form-control" id="input5" min="0" max="250" name="input5"  required>
                                                                <label for="input5">Height(in cm)</label>
                                                                 </div> 
                                                                </div> 
                                                                 <div class="col-md-6"> <div class="input-field"> 
                                                                    <input type="number" name="input6" min="0" max="200" class="form-control" id="input6" required>
                                                                     <label for="input6">Weight</label> 
                                                                    </div> 
                                                                </div> 
                                                            </div> 
                                                            
                                            <div class="row g-2 mt-1">
                                                <div class="col-md-6"> 
                                                    <div class="dropdown"><div class="text-bar5">
                                                    <select id="bgroup" class="form-control" name="bgroup" ></div></div>
                                                    <optgroup label="Blood Group">
                                                    <option value="A+" <?php if (isset($bgroup) && $bgroup=="A+") echo 'selected'; ?> >A+</option>
                                                    <option value="B+" <?php if (isset($bgroup) && $bgroup=="B+") echo 'selected'; ?> >B+</option>

                                                    <option value="O+" <?php if (isset($bgroup) && $bgroup=="O+") echo 'selected'; ?> >O+</option>

                                                    <option value="O-" <?php if (isset($bgroup) && $bgroup=="O-") echo 'selected'; ?> >O-</option>
                                                    <option value="AB+" <?php if (isset($bgroup) && $bgroup=="AB+") echo 'selected'; ?> >AB+</option>
                                                    <option value="AB-" <?php if (isset($bgroup) && $bgroup=="AB-") echo 'selected'; ?> >AB-</option>
                                                    </select><br>
                                                </div>
                                                </div>
                                             </div> 
                                                <div class="col-md-6"> <div class="input-field"> 
                                                <input type="text" class="form-control" name="input8" id="input8" required>
                                                    <label for="input8">Government ID</label> 
                                                </div> 
                                            </div> 
                                        </div> 
                                        <div class="row g-2 mt-1">
                                                <div class="col-md-6"> 
                                                    <div class="dropdown"><div class="text-bar5">
                                                    <select id="state" class="form-control" name="state" ></div></div>
                                                    <optgroup label="state">
                                                    <option value="AP"<?php if (isset($state) && $state=="Andhra Pradesh") echo 'selected'; ?>>Andhra Pradesh</option>
                                                    <option value="AR"<?php if (isset($state) && $state=="Arunachal Pradesh") echo 'selected'; ?>>Arunachal Pradesh</option>
                                                    <option value="AS"<?php if (isset($state) && $state=="Assam") echo 'selected'; ?>>Assam</option>
                                                    <option value="BR"<?php if (isset($state) && $state=="Bihar") echo 'selected'; ?>>Bihar</option>
                                                    <option value="CT"<?php if (isset($state) && $state=="Chhattisgarh") echo 'selected'; ?>>Chhattisgarh</option>
                                                    <option value="GA"<?php if (isset($state) && $state=="Gujarat") echo 'selected'; ?>>Gujarat</option>
                                                    <option value="HR"<?php if (isset($state) && $state=="Haryana") echo 'selected'; ?>>Haryana</option>
                                                    <option value="HP"<?php if (isset($state) && $state=="Himachal Pradesh") echo 'selected'; ?>>Himachal Pradesh</option>
                                                    <option value="JK"<?php if (isset($state) && $state=="Jammu and Kashmir") echo 'selected'; ?>>Jammu and Kashmir</option>
                                                    <option value="GA"<?php if (isset($state) && $state=="Goa") echo 'selected'; ?>>Goa</option>
                                                    <option value="JH"<?php if (isset($state) && $state=="Jharkhand") echo 'selected'; ?>>Jharkhand</option>
                                                    <option value="KA"<?php if (isset($state) && $state=="Karnataka") echo 'selected'; ?>>Karnataka</option>
                                                    <option value="KL"<?php if (isset($state) && $state=="Kerala") echo 'selected'; ?>>Kerala</option>
                                                    <option value="MP"<?php if (isset($state) && $state=="Madhya Pradesh") echo 'selected'; ?>>Madhya Pradesh</option>
                                                    <option value="MH"<?php if (isset($state) && $state=="Maharashtra") echo 'selected'; ?>>Maharashtra</option>
                                                    <option value="MN"<?php if (isset($state) && $state=="Manipur") echo 'selected'; ?>>Manipur</option>
                                                    <option value="ML"<?php if (isset($state) && $state=="Meghalaya") echo 'selected'; ?>>Meghalaya</option>
                                                    <option value="MZ"<?php if (isset($state) && $state=="Mizoram") echo 'selected'; ?>>Mizoram</option>
                                                    <option value="NL"<?php if (isset($state) && $state=="Nagaland") echo 'selected'; ?>>Nagaland</option>
                                                    <option value="OR"<?php if (isset($state) && $state=="Odisha") echo 'selected'; ?>>Odisha</option>
                                                    <option value="PB"<?php if (isset($state) && $state=="Punjab") echo 'selected'; ?>>Punjab</option>
                                                    <option value="RJ"<?php if (isset($state) && $state=="Rajasthan") echo 'selected'; ?>>Rajasthan</option>
                                                    <option value="SK"<?php if (isset($state) && $state=="Sikkim") echo 'selected'; ?>>Sikkim</option>
                                                    <option value="TN"<?php if (isset($state) && $state=="Tamil Nadu") echo 'selected'; ?>>Tamil Nadu</option>
                                                    <option value="TG"<?php if (isset($state) && $state=="Telangana") echo 'selected'; ?>>Telangana</option>
                                                    <option value="TR"<?php if (isset($state) && $state=="Tripura") echo 'selected'; ?>>Tripura</option>
                                                    <option value="UT"<?php if (isset($state) && $state=="Uttarakhand") echo 'selected'; ?>>Uttarakhand</option>
                                                    <option value="UP"<?php if (isset($state) && $state=="Uttar Pradesh") echo 'selected'; ?>>Uttar Pradesh</option>
                                                    <option value="WB"<?php if (isset($state) && $state=="West Bengal") echo 'selected'; ?>>West Bengal</option>
                                                    <option value="AN"<?php if (isset($state) && $state=="Andaman and Nicobar Islands") echo 'selected'; ?>>Andaman and Nicobar Islands</option>
                                                    <option value="CH"<?php if (isset($state) && $state=="Chandigarh") echo 'selected'; ?>>Chandigarh</option>
                                                    <option value="DN"<?php if (isset($state) && $state=="Dadra and Nagar Haveli") echo 'selected'; ?>>Dadra and Nagar Haveli</option>
                                                    <option value="DD"<?php if (isset($state) && $state=="Daman and Diu") echo 'selected'; ?>>Daman and Diu</option>
                                                    <option value="DL"<?php if (isset($state) && $state=="Delhi") echo 'selected'; ?>>Delhi</option>
                                                    <option value="LD"<?php if (isset($state) && $state=="Lakshadweep") echo 'selected'; ?>>Lakshadweep</option>
                                                    <option value="PY"<?php if (isset($state) && $state=="Puducherry") echo 'selected'; ?>>Puducherry</option>
                                                    </select><br>
                                                </div>
                                                </div>
                                             </div> 
                                                <div class="col-md-6"> <div class="input-field"> 
                                                <input type="text" class="form-control" name="input9" id="input9" required> 
                                            <label for="input9">Address</label>
                                                </div> 
                                            </div> 
                                        </div> 
                                    
                                         
                                <div class="row mt-2">
                                     <div class="col-md-12"> 
                                        <div class="input-field"> 
                                            <input type="email" class="form-control" name="input10" id="input10" required> 
                                            <label for="input10">Email</label>
                                         </div>
                                         </div> 
                                        </div> 
                                            <div class="row mt-2 mb-2">
                                                 <div class="col-md-12"> 
                                                <div class="input-field"> 
                                                    <input type="password" class="form-control" name="input11" id="input11" required> 
                                                    <label for="input11">Password</label> 
                                                </div>
                                             </div>
                                             </div> 
                                             <span style="color:grey;">Password must be atleast 8 characters</span> 
                                                    <div class="row mt-2"> <div class="col-md-12"> 
                                                        <button type="submit" name="submit" id="submit" style="background-color:#8B93E8; color:white;" class="btn w-100 signup-button">Sign up</button>
                                                     </div> 
                                                    </div> 
                                                    <div class="member mt-1"> <span style="color:grey;">Already a member?</span>
                                                             <a class="text-decoration-none" href="Plogin.php">Sign in</a> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                </div> 
                                            </form>
                                            <?php
                                                if(isset($_POST['submit'])){
                                                if(!empty($_POST['radio'])) {
                                                    echo '  ' . $_POST['radio'];
                                                } else {
                                                    echo 'Please select the value.';
                                                }
                                                }
                                            ?>
                                            <div class="col-md-6"> 
                                                            <div class="right-side-content"> 
                                                            <div class="content d-flex flex-column"> 
                                                            </div>
                                                            <div class="right-side"> 
                                                                    <img style="width:54vw; margin-left:-80px; margin-top:-30px;" src="images/dreg.png">
                                                                  
                                                            </div>        
                                                                         </div>
</div>
</body>
<script>


    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>

<!-- Latest compiled JavaScript -->
</html>