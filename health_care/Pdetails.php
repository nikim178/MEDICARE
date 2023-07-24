<?php
  if($_REQUEST['pid']){
    $pid = $_REQUEST['pid'];
  }
  include("config.php");
session_start();
if (isset($_SESSION['did'])) {

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
      window.location.href='index.php';
    
      </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper d-flex align-items-stretch">
    <?php
    include('includes/dnavbar.php');
    ?>
<div id="content" class="p-0 p-md-0 pt-0">
      <section id="personal">
        <div class="container">
          

            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
              <form action="update_pdetails.php" method="post">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="row gutters">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-2 text-primary">Personal Details</h6>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="form-group">
                          <label for="fullName">First Name</label>
                          <h6  name="fname" id="fullName" ><?php echo $fname; ?></h6>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="fullName">Last Name</label>
                          <h6  name="lname" ><?php echo $lname; ?></h6>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="gender">Gender</label>
                          <h6 name="gender" id="gender" ><?php echo $gender; ?></h6>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="age">Age</label>
                          <h6 name="age" id="fullName" ><?php echo $age; ?></h6>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="fullName">Height</label>
                          <h6 name="height" id="fullName" ><?php echo $height; ?></h6>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="weight">Weight</label>
                          <h6 name="weight" id="weight"><?php echo $weight; ?></h6>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="form-group">
                          <label for="age">Blood Group</label>
                          <h6 name="bgroup" id="bgroup"><?php echo $bgroup; ?></h6>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="Gid">Government Id</label>
                          <h6 name="gid" id="gid" ><?php echo $gid; ?></h6>
                        </div>
                      </div>

                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <h6 name="email" id="eMail"><?php echo $email; ?></h6>
                        </div>
                      </div>

                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="Address">Address</label>
                          <h6 id="address" name="address" ><?php echo $address; ?></h6>
                        </div>
                      </div>

                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                      </div>
                      
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
        <?php
include('includes/dscript.php');
?>