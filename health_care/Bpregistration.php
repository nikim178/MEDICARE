<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
 
<body>
   
<?php
     $conn = mysqli_connect("localhost", "root", "", "healthcare");
         
     // Check connection
     if($conn === false){
         die("ERROR: Could not connect. "
             . mysqli_connect_error());
     }
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
    }
    if($email != null)
    {
        $result = mysqli_query($conn,"SELECT * FROM `patient` where email='".$email."'");


        $num_row=mysqli_num_rows($result);



        if($num_row >= 1)
        {
            echo "<script>
           alert('Email already exist');
           window.location.href='Pregistration.php';
            </script>";
            die();
         
           
        }
        if ($_POST['age'] > 100) {
           
            echo "<script>
            alert('Age cannot be greater than 100.');
            window.location.href='Pregistration.php';
             </script>";
          } 
          if ($_POST['weight'] > 200) {
          
            echo "<script>
            alert('Weight cannot be greater than 100.');
            window.location.href='Pregistration.php';
             </script>";
          
          } 
        else
        {
            $sql = "INSERT INTO patient  VALUES (DEFAULT,'$fname',
            '$lname','$gender','$age','$height','$weight','$bgroup','$gid','$state','$address','$email','$password',NULL,NULL,NULL)";
            if(mysqli_query($conn, $sql)){
                echo "<h3>data stored in a database successfully."
                    . " Please browse your localhost php my admin"
                    . " to view the updated data</h3>";
                echo $fname ,$lname,$gender,$age,$height,$weight,$bgroup,$gid,$state,$address,$email,$password;}
                else{
                    echo "ERROR: Hush! Sorry $sql. "
                        . mysqli_error($conn);
                }
                header("Location:Plogin.php");
    // Close connection
    mysqli_close($conn);
        }
    }
    


    
    ?>
 
</body>
 
</html>