<?php
    include 'config.php';
    session_start();
    $pid = $_REQUEST['pid'];
    $uid = $_REQUEST['key'];
    $sql = "SELECT * FROM `patient` WHERE `pid` = $pid AND `uid` = $uid";
    $result_sql = mysqli_query($mysqli, $sql);

    if(mysqli_num_rows($result_sql) > 0){
        $_SESSION['pid'] = $pid;
        header("location:History.php");
    }else{

        echo "<script>
           alert('Sorry! Wrong Key');
           window.location.href='Enterkey.php?pid='+$pid;
        </script>";
         die();
    }
?>