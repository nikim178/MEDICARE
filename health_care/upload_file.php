<?php

 session_start();
print_r($_SESSION);
mkdir("testupload/".$_SESSION['pid']);
 $targetfolder = "testupload/".$_SESSION['pid']."/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 //echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
 header("location:Patient.php"); 
 }

 else {

 echo "Problem uploading file";

 }

 ?>