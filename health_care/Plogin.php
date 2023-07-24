
   <?php 
   include("config.php");
   session_start();
   if(isset($_SESSION['alogin'])&&!empty($_SESSION['alogin'])){
    header("Location: Patient2.php");
    exit();
 }
   if(isset($_POST['sub']))
   {
   $email= $_POST['email'];
   $password = $_POST['password'];
   
   $res = mysqli_query($mysqli,"SELECT * FROM `patient` WHERE email='$email'and password='$password'");
   $numRows = mysqli_num_rows($res);
   if($numRows  == 1){
    $_SESSION['alogin']=$_POST['email'];
    while($row = mysqli_fetch_assoc($res)){
        $_SESSION['pid'] = $row['pid'];
        echo "You are login Successfully ";
        header("location:Patient2.php");   
    }
   
   }
   else
   {
    echo "<script>
           alert('Sorry! Wrong Credentials');
           window.location.href='Plogin.php';
        </script>";
         die();
   }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mongolian&display=swap" rel="stylesheet">
    <script type="text/javascript">
    function preventBack() {window.history.forward()};
    setTimeout("preventBack()",0);
    window.onunload-function(){null; }
    </script>
</head>
<body>
   
    <div>
        <div class="container">
            <div class="row g-0 mt-5 mb-5 height-100">
                <div class="col-md-6">
                    <div class="bg-lights p-4 h-100 sidebar">
                        
                        <!-- <ul class="chart-design">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>  -->
                        <img class="patimg" src="images/plogin2-removebg-preview.png">
                    </div>
                </div>
               
                <div class="col-md-6">
                <form name="frmUser" method="post" action="">
                    <div class="bg-white p-4 h-100">
                        <div class="py-4 px-3" style="margin-top:55px;"> 
                            <h4 style="font-family: 'Noto Sans Mongolian', sans-serif; font-size:40px; color:#3B3C36;">Welcome Back ..</h4>
                            <span style="color:grey;font-size:15px;">Please enter your gmail and password</span> 
                            <div class="row g-2 mt-1">
                        <div class="col-md-6"> 
                            
                                    </div> 
                                             
                                    <div class="row mt-2">
                                         <div class="col-md-12"> 
                                            <div class="input-field"> 
                                                <input type="email" class="form-control"  name="email" required> 
                                                <label for="input3">Email</label>
                                             </div>
                                             </div> 
                                            </div> 
                                                <div class="row mt-2 mb-2">
                                                     <div class="col-md-12"> 
                                                    <div class="input-field"> 
                                                        <input type="password" class="form-control" id="input4" name="password" required> 
                                                        <label for="input4">Password</label> 
                                                    </div>
                                                 </div>
                                                 </div> 
                                                
                                                        <div class="row mt-2"> <div class="col-md-12"> 
                                                            <button name="sub" style="background-color: #3B3C36;" class="btn btn-primary w-100 signup-button">Sign In</button>
                                                         </div> 
                                                        </div> 
                                                        <div class="member mt-1"> <span style="color:grey; font-size:15px;"> Don't have an account?</span>
                                                                 <a class="text-decoration-none" style="color:#3B3C36;" href="Pregistration.php">Sign up</a> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                    </div>
                    </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>

<!-- Latest compiled JavaScript -->
</html>