<?php
include("config.php");
  session_start();
  if(isset($_SESSION['did'])){
    
    
  }else
{

        echo "<script>
      window.location.href='index.php';
    
      </script>";
}

  if($_REQUEST['pid']){
    $pid = $_REQUEST['pid'];


  $sql = "SELECT * FROM `patient` WHERE `pid` = $pid";
  $result = mysqli_query($mysqli, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $pid = $row['pid'];
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

      echo "error";
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
  <nav id="sidebar">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>
      <div class="p-4 pt-5">
        
        <h1><a href="index.html" class="logo">MediCare</a></h1>
        <ul class="list-unstyled components mb-5">



          <li>
            <a href="addprescription.php?pid=<?php echo $pid; ?>" name="addp">Upload Prescription</a>
          </li>

          <li>
            <a href="addlab.php?pid=<?php echo $pid; ?>">Upload Lab Report</a>
          </li>

          <li class="active">
            <a href="Doctor2.php">Home</a>
          </li>

          <li class="active">
            <a onclick="logout()">Logout</a>
          </li>

        </ul>
      </div>
    </nav>
<div id="content" class="p-0 p-md-0 pt-0">
      <section id="personal">
        <div class="container">
          <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
              <div class="card mt-20">
                <div class="card-body">
                  <div class="account-settings">
                    <div class="user-profile">
                      <div class="user-avatar" style="margin-left:30px;">
                        <img src="images/user2-profie.png" style="width:80%; height:50%;"  alt="Maxwell Admin">
                      </div>
                      <h5 class="user-name"><?php echo $fname; ?> <?php echo $lname; ?></h5>
                      <h6 class="user-email"><?php echo $email; ?></h6>
                    </div>
                    <div class="about">
                      <h5>About</h5>
                      <p>I'm <?php echo $fname; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
              <form action="update_pdetails.php" method="post">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="row gutters">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-2 text-primary">Patient's Details</h6>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="fullName">First Name</label>
                          <input type="text" class="form-control" name="fname" id="fullName" placeholder="Enter first name" value=<?php echo $fname; ?> readonly>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="fullName">Last Name</label>
                          <input type="text" class="form-control" name="lname" id="fullName" placeholder="Enter last name" value=<?php echo $lname; ?> readonly>
                        </div> 
                      </div>
                      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="gender">Gender</label>
                          <input type="text" class="form-control" name="gender" id="gender" placeholder="Gender" value=<?php echo $gender; ?> readonly>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="age">Age</label>
                          <input type="number" class="form-control" name="age" id="fullName" placeholder="Age" value=<?php echo $age; ?>>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="fullName">Height</label>
                          <input type="number" class="form-control" name="height" id="fullName" placeholder="Height" value=<?php echo $height; ?>>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="weight">Weight</label>
                          <input type="number" class="form-control" name="weight" id="weight" placeholder="Weight" value=<?php echo $weight; ?>>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="age">Blood Group</label>
                          <input type="text" class="form-control" name="bgroup" id="bgroup" placeholder="Blood Group" value=<?php echo $bgroup; ?> readonly>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="Gid">Government Id</label>
                          <input type="text" class="form-control" name="gid" id="gid" placeholder="government id" value=<?php echo $gid; ?> readonly>
                        </div>
                      </div>

                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="email" id="eMail" placeholder="Enter email ID" value=<?php echo $email; ?> readonly>
                        </div>
                      </div>

                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="Address">Address</label>
                          <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value=<?php echo $address; ?> readonly>
                        </div>
                      </div>

                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                      </div>
                      <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <div class="text-right">

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </section>
</div>
</div>
<?php
include('includes/dscript.php');
?>