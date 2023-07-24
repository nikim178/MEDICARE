<?php
    include("config.php");
    session_start();
    $did = $_SESSION['did'];
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $age = $_REQUEST['age'];
    $regno = $_REQUEST['regno'];
    $special = $_REQUEST['special'];
    $experience = $_REQUEST['experience'];
    $curpos = $_REQUEST['curpos'];
   
    $qualification = $_REQUEST['qualification'];
    $email = $_REQUEST['email'];
    $sql = "UPDATE `doctor` SET `fname`='$fname',`lname`='$lname',`age`=$age,`regno`=$regno,`special`='$special',`experience`=$experience,`curpos`='$curpos',`qualification`='$qualification',`email`='$email' WHERE `did` = $did";
    // echo $sql;
    $result = mysqli_query($mysqli, $sql);
    header("location:Doctor2.php"); 
    
?>