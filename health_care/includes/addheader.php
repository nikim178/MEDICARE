<?php
include("config.php");
  session_start();
  if(isset($_SESSION['did'])){
    
    
  }else
{

        echo "<script>
      window.location.href='index.html';
    
      </script>";
}


  if($_REQUEST['pid']){
    $pid = $_REQUEST['pid'];


  $sql = "SELECT * FROM `patient` WHERE `pid` = $pid";
  $result = mysqli_query($mysqli, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $fname = $row['fname'];
      $lname = $row['lname'];
      $gender = $row['gender'];
      $age = $row['age'];
      $height = $row['height'];
      $weight = $row['weight'];
      $bgroup = $row['bgroup'];
      $gid = $row['gid'];
      $address = $row['address'];
      $email = $row['email'];
      $uid = $row['uid'];
    }
  }
}else
{

      echo "<script>
      window.location.href='addlab.php';
    
      </script>";
}
?>



<!doctype html>
<html lang="en">

<head>
  <title>Patient</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>

<div class="wrapper d-flex align-items-stretch">
  <?php
  include('includes/addnavbar.php');
  ?>
  
</div>