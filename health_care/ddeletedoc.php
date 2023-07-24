<?php

include("config.php");
session_start();

$file_delete=$_GET['file_delete'];
$user_id=$_SESSION['did'];                //user ID stored in session at time of login

if (isset($_GET['file_delete'])) {
    $sql = "DELETE FROM doctor_data WHERE id = ? AND doctor_id = ? LIMIT 1"; // question indicate placeholders for later use, Also make sure to limit it to 1
    $stmt = $mysqli->prepare($sql);             // prepare query
   $stmt->bind_param("ii", $file_delete, $user_id); // Bind values to the placeholders
    if($stmt->execute()){                     // execute the query OR delete the entry if it exists
      $sql="SELECT * FROM doctor_data WHERE id = '". $file_delete ."' LIMIT 1";     // select file name using file_id
      $result=mysqli_query($mysqli,$sql);
      if($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        unlink("testupload2" . $row['file']);// Delete the file from server
        
        }
      }
      else{echo "Something went wrong!";}
}
header("Location:dshow.php");

?>