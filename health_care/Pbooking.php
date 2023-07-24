
   
<?php
        
    include 'config.php';
         
     // Check connection
     
     if($_SERVER['REQUEST_METHOD']=='POST'){
        $pid=$_POST['pid'];
        
        $aname=$_POST['aname'];
        $aemail=$_POST['aemail'];
       
        $aphone=$_POST['aphone'];
        $adate=$_POST['adate'];
        $time = $_POST['time'];
        $doctor=$_POST['doctor'];
        $split_string = explode('_',$doctor);
        $doctor_name=$split_string[1];
        $did=$split_string[0];

    }
    $sql = "INSERT INTO pappointment  VALUES ($pid,$did,'$aname',
            '$aemail','$aphone','$adate','$doctor_name','$time',DEFAULT)";
   
    $result_sql=mysqli_query($mysqli, $sql);

    
    header("Location:pappointment.php");
    // Close connection
  
    ?>
 
