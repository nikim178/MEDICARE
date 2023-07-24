<?php

include("config.php");
session_start();

$file_delete=$_GET['file_delete'];
$user_id=$_SESSION['pid'];                //user ID stored in session at time of login

if (isset($_GET['file_delete'])) {
  $sql1 = "SELECT * FROM patient_data WHERE id = '". $file_delete ."' LIMIT 1";
  $result1 = mysqli_query($mysqli,$sql1);
  if(mysqli_num_rows($result1) > 0)
  { 
    while($row = mysqli_fetch_assoc($result1))
    {
      $filename = $row['file_dir'];
    }
  }
    $sql = "DELETE FROM patient_data WHERE id = ? AND patient_id = ? LIMIT 1"; // question indicate placeholders for later use, Also make sure to limit it to 1
    $stmt = $mysqli->prepare($sql);             // prepare query
   $stmt->bind_param("ii", $file_delete, $user_id); // Bind values to the placeholders
    if($stmt->execute()){                     // execute the query OR delete the entry if it exists
      // $sql="SELECT * FROM patient_data WHERE id = '". $file_delete ."' LIMIT 1";  
      //    // select file name using file_id
      //    echo $sql;
      // $result=mysqli_query($mysqli,$sql);
      // if(mysqli_num_rows($result) > 0){
       
        unlink("testupload/$user_id/" . $filename);// Delete the file from server
        
      //   }
      }
      else{echo "Something went wrong!";}
}
header("Location:phistory.php");

?>