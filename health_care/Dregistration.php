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
                    <div class="py-4 px-3"> 
                    <h4 style="font-family: 'Noto Sans Mongolian', sans-serif; font-size:35px; color:#0E4E3E ;">Create your account</h4> 
                    <span style="font-family: 'Noto Sans Mongolian', sans-serif; font-size:15px; color:grey;">Enter fields below to get started</span>
                        <?php
                            if($_SERVER['REQUEST_METHOD']=='POST'){
                                $fname=$_POST['input1'];
                                $lname=$_POST['input2'];
                                $age=$_POST['input3'];
                                $regno=$_POST['input4'];
                                $special=$_POST['input5'];
                                $experience=$_POST['input6'];
                                $curpos=$_POST['input7'];
                                $qualification=$_POST['input8'];
                                $email=$_POST['input9'];
                                $password=$_POST['input10'];
                                
                                echo"entered successfully";

                            }
                        ?>
    <form action="Bdregistration.php" method="post">
        <div class="row g-2 mt-1">
        <div class="col-md-6"> 
        <div class="input-field"> 
        <input type="text" class="form-control" name="input1" id="input1" required>
                <label for="input1">First Name</label>
                </div> 
            </div> 
                <div class="col-md-6"> <div class="input-field"> 
                <input type="text" class="form-control" name="input2" id="input2" required>
                    <label for="input2">Last Name</label> 
                </div> 
            </div> 
        </div> 
        <div class="row g-2 mt-1">
            <div class="col-md-4"> 
                <div class="input-field"> 
                    <input type="number" name="input3" class="form-control" id="input3" required>
                                <label for="input3">Age</label>
                                </div> 
                            </div> 
                                <div class="col-md-8"> <div class="input-field"> 
                                <input type="tel" class="form-control" id="input4" name="input4" required>
                                    <label for="input4">Registration No.</label> 
                                </div> 
                            </div> 
                        </div> 
                <div class="row g-2 mt-1">
                            <div class="col-md-8"> 
                                <div class="input-field"> 
                                    <input type="text" class="form-control" id="input5" name="input5" required>
                                                <label for="input5">Speciality</label>
                                                </div> 
                                            </div> 
                                                <div class="col-md-4"> <div class="input-field"> 
                                                <input type="number" class="form-control" name="input6" id="input6" required>
                                                    <label for="input6">Experience</label> 
                                                </div> 
                                            </div> 
                                        </div> 
                    <div class="row g-2 mt-1">
                                            <div class="col-md-6"> 
                                                <div class="input-field"> 
                                                    <input type="text" class="form-control" name="input7" id="input7" required>
                                                                <label for="input7">Current position</label>
                                                                </div> 
                                                            </div> 
                                                                <div class="col-md-6"> <div class="input-field"> 
                                                                <input type="text" name="input8" class="form-control" id="input8" required>
                                                                    <label for="input8">Qualification</label> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                    
        <div class="row mt-2">
                <div class="col-md-12"> 
                <div class="input-field"> 
                    <input type="email" name="input9" class="form-control" id="input9" required> 
                    <label for="input9">Email</label>
                    </div>
                    </div> 
                </div> 
                    <div class="row mt-2 mb-2">
                            <div class="col-md-12"> 
                        <div class="input-field"> 
                            <input type="password" name="input10" class="form-control" id="input10" required> 
                            <label for="input10">Password</label> 
                        </div>
                        </div>
                        </div> 
                        <span style="color:grey;" class="">Password must be atleast 8 characters</span> 
                            <div class="row mt-2"> <div class="col-md-12"> 
                                <button class="btn btn-primary w-100 signup-button">Sign up</button>
                                </div> 
                            </div> 
                            <div style="color:grey;" class="member mt-1"> <span>Already a member?</span>
                                        <a class="text-decoration-none" href="Dlogin.php">Sign in</a> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </form>
                    <div class="col-md-6"> 
                                    <div class="right-side-content"> <div class="content d-flex flex-column"> 
                                            </div>
                                            <div class="right-side"> 
                                            <img style="margin-top:60px; margin-left:130px;width:20vw;" src="doctor5.png" class="docimg">
                                            
                                            </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>

<!-- Latest compiled JavaScript -->
</html>