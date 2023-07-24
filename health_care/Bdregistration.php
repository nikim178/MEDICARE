<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
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
        $age=$_POST['input3'];
        $regno=$_POST['input4'];
        $special=$_POST['input5'];
        $experience=$_POST['input6'];
        $curpos=$_POST['input7'];
        $qualification=$_POST['input8'];
        $email=$_POST['input9'];
        $password=$_POST['input10'];
        
     

    }
    if($email != null)
    {
        $result = mysqli_query($conn,"SELECT * FROM `doctor` where email='".$email."'");
        $num_row=mysqli_num_rows($result);
        if($num_row >= 1)
        {
            echo "<script>
           alert('Email already exist');
           window.location.href='Dregistration.php';
            </script>";
         
           
        }
        else
        {
    $sql = "INSERT INTO doctor  VALUES (DEFAULT,'$fname',
            '$lname','$age','$regno','$special','$experience','$curpos','$qualification','$email','$password')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";
    echo $fname,$lname,$age,$regno,$special,$experience,$curpos,$qualification,$email,$password;}
    else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    header("Location:Dlogin.php");
    // Close connection
    mysqli_close($conn);
    
}
}
    ?>
 
</body>
 
</html>
