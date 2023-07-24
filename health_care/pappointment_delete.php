<?php

include("config.php");
session_start();

$aid=$_GET['aid'];
$user_id=$_SESSION['pid'];                //user ID stored in session at time of login

if (isset($_GET['aid'])) {
    $sql = "DELETE FROM pappointment WHERE aid = ? AND pid = ? LIMIT 1"; // question indicate placeholders for later use, Also make sure to limit it to 1
    $stmt = $mysqli->prepare($sql);             // prepare query
   $stmt->bind_param("ii", $aid, $user_id); // Bind values to the placeholders
    if($stmt->execute()){                     // execute the query OR delete the entry if it exists
      $sql="SELECT * FROM pappointment WHERE aid = '". $aid ."' LIMIT 1";     // select file name using file_id
      $result=mysqli_query($mysqli,$sql);
      
      }
      else{echo "Something went wrong!";}
}
header("Location:pshow.php");

?>