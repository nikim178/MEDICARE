<?php
    include("config.php");
    session_start();
    if($_REQUEST['pid']){
        $pid = $_REQUEST['pid'];
        $rand = rand(100000, 999999);
        $sql = "UPDATE `patient` SET `uid` = $rand WHERE `pid` = $pid";
        // echo $sql;
        $result = mysqli_query($mysqli, $sql);
        header("location:pkey.php"); 
    }
?>