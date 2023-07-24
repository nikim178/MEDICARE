<?php
    include("config.php");
    session_start();
    $pid = $_SESSION['pid'];
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $gender = $_REQUEST['gender'];
    $age = $_REQUEST['age'];
    $height = $_REQUEST['height'];
    $weight = $_REQUEST['weight'];
    $bgroup = $_REQUEST['bgroup'];
    $gid = $_REQUEST['gid'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];
    $sql = "UPDATE `patient` SET `fname`='$fname',`lname`='$lname',`gender`='$gender',`age`=$age,`height`=$height,`weight`=$weight,`bgroup`='$bgroup',`gid`='$gid',`address`='$address',`email`= '$email' WHERE `pid` = $pid";
    // echo $sql;
    $result = mysqli_query($mysqli, $sql);
    header("location:Patient2.php"); 
    
?>