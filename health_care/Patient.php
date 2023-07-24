<?php

include("config.php");
session_start();

if (isset($_SESSION['pid'])) {
  $pid = $_SESSION['pid'];
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
      $status=$row['status'];
    }
  }
}else
{

        echo "<script>
      window.location.href='index.php';
    
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
  <link rel="stylesheet" href="history.css">
  <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript">
    function preventBack() {window.history.forward()};
    setTimeout("preventBack()",0);
    window.onunload-function(){null; }
    </script>
    
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" >
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>
      <div class="p-4 pt-5">
        <h1><a href="index.html" class="logo">MediCare</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a onclick="changeContent('personal')">Additional Details</a>

          </li>
          <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Diagnosistic/Report</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
                <a onclick="changeContent('lab')">Lab Test Reports</a>
              </li>
              <li>
                <a onclick="changeContent('prescription')">Prescription</a>
              </li>
              <li>
                <a onclick="changeContent('history')">Medical History</a>
              </li>
              <li>
                <a onclick="changeContent('allergies')">Allergies</a>
              </li>

            </ul>
          </li>
          <li>
            <a onclick="changeContent('key')">Generate Key</a>
          </li>
          <li>
            <a onclick="changeContent('doc')">Documents</a>
          </li>
          <li>
            <a onclick="changeContent('phistory')">Medical History</a>
          </li>
          <li>
            <a onclick="changeContent('appointment')">Book Appointment</a>
          </li>
          <li>
            <a onclick="changeContent('show')">Show Appointment</a>
          </li>
           <li class="active">
            <a onclick="logout()">Logout</a>
          </li>

        </ul>
      </div>
    </nav>

    <!-- Page Content  -->
    <div id="content" class="mainbody" class="p-0 p-md-0 pt-0">
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
                        <h6 class="mb-2 text" style="color:#3B3C36;">Personal Details</h6>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="fullName">First Name</label>
                          <input type="text" class="form-control" name="fname" id="fullName" placeholder="Enter first name" value=<?php echo $fname; ?>>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="fullName">Last Name</label>
                          <input type="text" class="form-control" name="lname" id="fullName" placeholder="Enter last name" value=<?php echo $lname; ?>>
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
                          <input type="email" class="form-control" name="email" id="eMail" placeholder="Enter email ID" value=<?php echo $email; ?> >
                        </div>
                      </div>

                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                          <label for="Address">Address</label>
                          <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value=<?php echo $address; ?>>
                        </div>
                      </div>

                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                      </div>
                      <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <div class="text-right">
                            <input type="submit" id="submit" name="submit" class="btn btn-primary" style="background-color:#3B3C36; border-color:#3B3C36" value="Update">
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
      <section id="contact">
        contact
      </section>
      <section id="lab">
        <div class="py-20 h-screen bg-white-300 px-2">
          <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
              <div class="w-full px-4 py-6 ">
              <form action="help.php" method="post" enctype="multipart/form-data">
                <div class="mb-1">
                <h1>Upload Lab Reports</h1>
                  <span class="text-sm">Report Date</span>
                  <input type="text" name="report_date" class="h-12 px-3 w-full border-black-400 border-2 rounded focus:outline-none focus:border-black-600"/>
                </div>
                <input type="hidden" name="type" value="lab">

                <div class="mb-1">
                  <span class="text-sm">Description</span>
                  <textarea type="text" name="description" class="h-24 py-1 px-3 w-full border-2 border-black-400 rounded focus:outline-none focus:border-black-600 resize-none"></textarea>
                </div>

                <div class="mb-1">
                  <span class="text-sm text-gray-400">You will be able to edit this information later</span>
                </div>

                <div class="mb-1">

                  <span>Attachments</span>

                  

                    <input type="file" name="file" size="50" />

                    <br />

                    <input class="btn btn-primary" type="submit" style="background-color:#3B3C36; border-color:#3B3C36" value="Upload" />

                  </form>



                </div>
              </div>
            </div>
          </div>
      </section>
      <section id="prescription">
      <div class="py-20 h-screen bg-white-300 px-2">
          <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
              <div class="w-full px-4 py-6 ">
              <form action="help.php" method="post" enctype="multipart/form-data">
                <div class="mb-1">
                <h1>Upload Prescription</h1>
                  <span class="text-sm">Report Date</span>
                  <input type="text" name="report_date" class="h-12 px-3 w-full border-black-400 border-2 rounded focus:outline-none focus:border-black-600"/>
                </div>
                <input type="hidden" name="type" value="pre">

                <div class="mb-1">
                  <span class="text-sm">Description</span>
                  <textarea type="text" name="description" class="h-24 py-1 px-3 w-full border-2 border-black-400 rounded focus:outline-none focus:border-black-600 resize-none"></textarea>
                </div>

                <div class="mb-1">
                  <span class="text-sm text-gray-400"></span>
                </div>

                <div class="mb-1">

                  <span>Attachments</span>

                  

                    <input type="file" name="file" size="50" />

                    <br />

                    <input class="btn btn-primary" type="submit" style="background-color:#3B3C36; border-color:#3B3C36"  value="Upload" />

                  </form>



                </div>
              </div>
            </div>
          </div>
      </section>
      <section id="history">
      <div class="py-20 h-screen bg-white-300 px-2">
          <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
              <div class="w-full px-4 py-6 ">
              <form action="help.php" method="post" enctype="multipart/form-data">
                <div class="mb-1">
                <h1>Upload Medical History</h1>
                  <span class="text-sm">Report Date</span>
                  <input type="text" name="report_date" class="h-12 px-3 w-full border-black-400 border-2 rounded focus:outline-none focus:border-black-600"/>
                </div>
                <input type="hidden" name="type" value="history">

                <div class="mb-1">
                  <span class="text-sm">Description</span>
                  <textarea type="text" name="description" class="h-24 py-1 px-3 w-full border-2 border-black-400 rounded focus:outline-none focus:border-black-600 resize-none"></textarea>
                </div>

                <div class="mb-1">
                  <span class="text-sm text-gray-400"></span>
                </div>

                <div class="mb-1">

                  <span>Attachments</span>

                  

                    <input type="file" name="file" size="50" />

                    <br />

                    <input class="btn btn-primary" type="submit" style="background-color:#3B3C36; border-color:#3B3C36" value="Upload" />

                  </form>



                </div>
              </div>
            </div>
          </div>
      </section>
      <section id="allergies">
      <div class="py-20 h-screen bg-white-300 px-2">
          <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
              <div class="w-full px-4 py-6 ">
              <form action="help.php" method="post" enctype="multipart/form-data">
                <div class="mb-1">
                <h1>Upload Allergies Report</h1>
                  <span class="text-sm">Report Date</span>
                  <input type="text" name="report_date" class="h-12 px-3 w-full border-black-400 border-2 rounded focus:outline-none focus:border-black-600"/>
                </div>
                <input type="hidden" name="type" value="allergies">

                <div class="mb-1">
                  <span class="text-sm">Description</span>
                  <textarea type="text" name="description" class="h-24 py-1 px-3 w-full border-2 border-black-400 rounded focus:outline-none focus:border-black-600 resize-none"></textarea>
                </div>

                <div class="mb-1">
                  <span class="text-sm text-gray-400"></span>
                </div>

                <div class="mb-1">

                  <span>Attachments</span>

                  

                    <input type="file" name="file" size="50" />

                    <br />

                    <input class="btn btn-primary" type="submit" style="background-color:#3B3C36; border-color:#3B3C36" value="Upload" />

                  </form>



                </div>
              </div>
            </div>
          </div>
      </section>
      <section id="key">
        <section class="login-clean">
          <form method="post">
            <h1><strong>Generate Password</strong></h1>
            <div class="mt-5 mb-5"></div>
            <div class="mb-3">
              <input class="form-control" type="text" id="pass" placeholder="Click the Generate Password Button" value=<?php echo $uid; ?>>
            </div>
            <div class="mb-3 ">

              <button class="btn btn-primary d-block w-100 " type="button" style="background-color:#3B3C36; border-color:#3B3C36"  onclick="generate_password(<?php echo $pid; ?>);">Generate Password</button>
            </div>
            <div class="toggle-wrapper">
                <div class="toggle checkcross">
                  <?php
                  $sql15 = "SELECT `status` FROM `patient` WHERE `pid` = $pid";
                 
                  $result_sql15 = mysqli_query($mysqli, $sql15);
                  if (mysqli_num_rows($result_sql15) > 0) {
                    while ($row15 = mysqli_fetch_assoc($result_sql15)) {
                        $status=$row15['status'];
                    }
                  }
                  if($status==1)
                  {

                    ?>
                    
                  <input id="checkcross" name="checkcross" value="checkcross"  type="checkbox"  checked />
                
                    <?php
                  }
                  else{
                    ?>
                     <input id="checkcross" name="checkcross" value="checkcross"  type="checkbox" />
                    <?php
                  }
                  ?>
                  
                <label class="toggle-item" for="checkcross">
                        <div class="check">

                        </div>
                    </label>
                </div> 
            </div>
          </form>
          <div id="toast">Password Copied !</div>
        </section>
      </section>
      <section id="doc">
      <div class="row">
<div class="col-md-11">
    <div class="card m-b-30">
        <div class="card-header">                                
            <div class="row align-items-center">
                <div class="col-8">
                    <h5 class="card-title mb-0">Important Files</h5>
                </div>
                <div class="col-4">
                    <ul class="list-inline-group text-right mb-1 pl-0">
                        <li class="list-inline-item mr-0 font-12"><i class="feather icon-more-vertical- font-20 text-primary"></i></li>
                    </ul>                                        
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="product-file-type">
      <ul class="list-unstyled">
        <?php
          $directory = "testupload/".$pid;
          $files = scandir($directory);
          for($i = 2; $i < count($files); $i++){
            $path = $directory."/".$files[$i];
        ?>
         <li class="media mb-3">
         <span class="mr-3 align-self-center img-icon primary-rgba text" style="color:#3B3C36;">.doc</span>
         <div class="media-body">
          <a href="<?php echo $path; ?>"><?php echo $files[$i]; ?></a>
          </div>
        </li>
        
        <?php
          }
        ?>   
      </ul>
      </section>
      <section id="phistory">
      <div id="content" style="margin-left: 2vw; width: 70vw;" class="p-0 p-md-0 pt-0">
      <div class="container">
      <div class="row">
        <h1>History</h1>
          <?php
           $sql = "SELECT * FROM `patient_data` WHERE `patient_id` = $pid";
           $result_sql = mysqli_query($mysqli, $sql);
       
              if(mysqli_num_rows($result_sql) > 0){
               
                  while($row = mysqli_fetch_assoc($result_sql)){
                      
                      $type = $row['type'];
                      $description = $row['description'];
                      $report_date = $row['report_date'];
                      $file_dir = $row['file_dir'];
                      $ocr_text = $row['ocr_text'];

                      $time=$row["upload_date"];
                      $date = date('d-m-y',$time);

                      if($type == 'lab'){ $type = "Lab Report";}
                      if($type == 'pre'){ $type = "Prescription";}
                      if($type == 'history'){ $type = "Medical History";}
                      if($type == 'allergies'){ $type = "Allergies";}
                      

          ?>
          <div class="col-lg-4">
              <div class="card card-margin h-60">
                  <div class="card-header no-border">
                      <h5 class="card-title" style="color:#3B3C36; " name="type"><?php echo $type; ?></h5>
                      <div class="card-title" name="date" style="margin-left: auto;"><?php echo $report_date; ?></div>
                      <div class="card-title" name="date" style="margin-left: auto;"><?php echo $date; ?></div>
                  </div>
                  <div class="card-body pt-0">
                      <div class="widget-49">
                          <div class="widget-49-title-wrapper">
                              
                              <div class="widget-49-meeting-info">
                                  <a href="testupload/<?php echo $pid; ?>/<?php echo $file_dir; ?>" class="widget-49-pro-title" name="link"><?php echo $file_dir?></a>
                                  
                              </div>
                          </div>
                          <div name="desc" class="widget-49-meeting-points">
                              <?php echo $description; ?>
                          </div>
                          
                      </div>
                  </div>
              </div>
          </div>
          <?php

        }
    }
    ?>
</div>
</div>
</div>
      </section>
      <section class="section-padding" id="appointment">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>
                         
                                <?php
                            if($_SERVER['REQUEST_METHOD']=='POST'){
                                $aname=$_POST['aname'];
                                $aemail=$_POST['aemail'];

                                $aphone=$_POST['aphone'];
                                $adate=$_POST['adate'];
                                $doctor=$_POST['doctor'];
                          
                                echo"entered successfully";

                            }
                        ?>

                                <form role="form" action="/HealthCare4/HealthCare4/Pbooking.php" method="post" >
                                  
                                  <input name="pid" type="hidden" value=<?php echo $pid; ?> />
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <input type="text" name="aname" id="name" class="form-control" placeholder="Full name" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="email" name="aemail" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-4">
                                            <input type="telephone" name="aphone" id="phone" class="form-control" placeholder="Phone: 123-456-7890">
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input  type="date" name="adate" id="date" value="" class="form-control" min=<?php echo date('Y-m-d'); ?>>
                                            
                                        </div>
                                      
                                        <div class="col-12" style="margin-left:10px">
                                       
                                        <div class="dropdown"><div class="text-bar5" class="form-control">
                                                    <select  id="bgroup"  name="doctor" >
                                                    <?php
                                                      $sql2="SELECT * FROM `doctor`";
                                                      $result_sql2 = mysqli_query($mysqli, $sql2);
                                                      if(mysqli_num_rows($result_sql2) > 0){
                                                            while($row2 = mysqli_fetch_assoc($result_sql2)){
                                                              
                                                          
                                                      ?>
                                                    
                                                    <option value=<?php echo $row2['did'].'_'.$row2['fname']; ?>><span>Dr. <?php echo $row2['fname']; ?> <?php echo $row2['lname']; ?></span></option>
                                                    <?php
                                                        
                                                      }
                                                    }
                                                    ?>
                                                    </select><br>
                                                </div>
                                        </div>


                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button type="submit" class="btn btn-primary" id="submit-button">Book Now</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
     </section>
            <section id="show">
            <section class="main-content">
            <div class="container">
              <h1> Booked Appointments</h1>
              <br>
              <br>

              <div class="row">
                <?php
                  $sql3="SELECT * FROM `pappointment` WHERE `pid`=$pid";
                  $result_sql3=mysqli_query($mysqli, $sql3);
                  if(mysqli_num_rows($result_sql3) > 0){
                    while($row3=mysqli_fetch_assoc($result_sql3)){
                        if(strtotime($row3['adate'])>=strtotime(date('Y-m-d'))){

                       
                   
                ?>
                <div class="col-sm-6 col-md-6 col-lg-4">
                  <div class="card bg-white p-3 mb-4 shadow">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="user-info">
                        
                        <div class="user-info__basic">
                          <h5 name="name" class="mb-0">Dr. <?php echo $row3['doctor']?></h5>
                          
                        </div>
                      </div>
                      <div class="dropdown open">
                        <a href="#!" class="px-2" id="triggerId1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v"></i>
                        </a>
                        
                      </div>
                    </div>
                    <h6 name="contact" class="mb-0"><?php echo $row3['phone']?></h6>
                    <a href="#!"><small>Contact</small></a>
                    <div class="d-flex justify-content-between mt-4">
                      <div>
                        <h5 class="mb-0">
                          <small name="date" class="ml-1"><?php echo $row3['adate']?></small>
                        </h5>
                      </div>
                      <span class="text-success font-weight-bold">Consult</span>
                    </div>
                  </div>
                </div>
                <?php
                   }
                  }

                  }
                  ?>
              </div>
              
            </div>
          </section>
            </section>
    </div>
  </div>



  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="tailwind.config.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="passgen.js "></script>
  <script>
 function generate_password(pid) {
    window.location.href = 'generate_password.php?pid=' + pid;
  }
function logout() {
    window.location.href = 'logout.php';
  }


 function changeContent(tab) {
   
    switch (tab) {
      case "personal":
        document.getElementById("personal").style.display = 'none';
        document.getElementById("contact").style.display = 'none';
        document.getElementById("lab").style.display = 'none';
        document.getElementById("prescription").style.display = 'none';
        document.getElementById("history").style.display = 'none';
        document.getElementById("allergies").style.display = 'none';
        document.getElementById("key").style.display = 'none';
        document.getElementById("doc").style.display = 'none';
        document.getElementById("phistory").style.display = 'none';
        document.getElementById("appointment").style.display = 'none';
        document.getElementById("show").style.display = 'none';
        document.getElementById("personal").style.display = 'block';
        break;
      case "contact":
        document.getElementById("personal").style.display = 'none';
        document.getElementById("contact").style.display = 'none';
        document.getElementById("lab").style.display = 'none';
        document.getElementById("prescription").style.display = 'none';
        document.getElementById("history").style.display = 'none';
        document.getElementById("allergies").style.display = 'none';
        document.getElementById("key").style.display = 'none';
        document.getElementById("doc").style.display = 'none';
        document.getElementById("phistory").style.display = 'none';
        document.getElementById("appointment").style.display = 'none';
        document.getElementById("show").style.display = 'none';
        document.getElementById("contact").style.display = 'block';
        break;
      case "lab":
        document.getElementById("personal").style.display = 'none';
        document.getElementById("contact").style.display = 'none';
        document.getElementById("lab").style.display = 'none';
        document.getElementById("prescription").style.display = 'none';
        document.getElementById("history").style.display = 'none';
        document.getElementById("allergies").style.display = 'none';
        document.getElementById("key").style.display = 'none';
        document.getElementById("doc").style.display = 'none';
        document.getElementById("phistory").style.display = 'none';
        document.getElementById("appointment").style.display = 'none';
        document.getElementById("show").style.display = 'none';
        document.getElementById("lab").style.display = 'block';
        break;
      case "prescription":
        document.getElementById("personal").style.display = 'none';
        document.getElementById("contact").style.display = 'none';
        document.getElementById("lab").style.display = 'none';
        document.getElementById("prescription").style.display = 'none';
        document.getElementById("history").style.display = 'none';
        document.getElementById("allergies").style.display = 'none';
        document.getElementById("key").style.display = 'none';
        document.getElementById("doc").style.display = 'none';
        document.getElementById("phistory").style.display = 'none';
        document.getElementById("appointment").style.display = 'none';
        document.getElementById("show").style.display = 'none';
        document.getElementById("prescription").style.display = 'block';
        break;
      case "key":
        document.getElementById("personal").style.display = 'none';
        document.getElementById("contact").style.display = 'none';
        document.getElementById("lab").style.display = 'none';
        document.getElementById("prescription").style.display = 'none';
        document.getElementById("history").style.display = 'none';
        document.getElementById("allergies").style.display = 'none';
        document.getElementById("key").style.display = 'none';
        document.getElementById("doc").style.display = 'none';
        document.getElementById("phistory").style.display = 'none';
        document.getElementById("appointment").style.display = 'none';
        document.getElementById("show").style.display = 'none';
        document.getElementById("key").style.display = 'block';
        break;
        case "doc":
        document.getElementById("personal").style.display = 'none';
        document.getElementById("contact").style.display = 'none';
        document.getElementById("lab").style.display = 'none';
        document.getElementById("prescription").style.display = 'none';
        document.getElementById("history").style.display = 'none';
        document.getElementById("allergies").style.display = 'none';
        document.getElementById("key").style.display = 'none';
        document.getElementById("doc").style.display = 'none';
        document.getElementById("phistory").style.display = 'none';
        document.getElementById("appointment").style.display = 'none';
        document.getElementById("show").style.display = 'none';
        document.getElementById("doc").style.display = 'block';
        break;
        case "history":
        document.getElementById("personal").style.display = 'none';
        document.getElementById("contact").style.display = 'none';
        document.getElementById("lab").style.display = 'none';
        document.getElementById("prescription").style.display = 'none';
        document.getElementById("history").style.display = 'none';
        document.getElementById("allergies").style.display = 'none';
        document.getElementById("key").style.display = 'none';
        document.getElementById("doc").style.display = 'none';
        document.getElementById("phistory").style.display = 'none';
        document.getElementById("appointment").style.display = 'none';
        document.getElementById("show").style.display = 'none';
        document.getElementById("history").style.display = 'block';
        
        break;
        case "allergies":
        document.getElementById("personal").style.display = 'none';
        document.getElementById("contact").style.display = 'none';
        document.getElementById("lab").style.display = 'none';
        document.getElementById("prescription").style.display = 'none';
        document.getElementById("history").style.display = 'none';
        document.getElementById("allergies").style.display = 'none';
        document.getElementById("key").style.display = 'none';
        document.getElementById("doc").style.display = 'none';
        document.getElementById("phistory").style.display = 'none';
        document.getElementById("appointment").style.display = 'none';
        document.getElementById("show").style.display = 'none';
        document.getElementById("allergies").style.display = 'block';
        
        break;
        case "phistory":
        document.getElementById("personal").style.display = 'none';
        document.getElementById("contact").style.display = 'none';
        document.getElementById("lab").style.display = 'none';
        document.getElementById("prescription").style.display = 'none';
        document.getElementById("history").style.display = 'none';
        document.getElementById("allergies").style.display = 'none';
        document.getElementById("key").style.display = 'none';
        document.getElementById("doc").style.display = 'none';
        document.getElementById("phistory").style.display = 'none';
        document.getElementById("appointment").style.display = 'none';
        document.getElementById("show").style.display = 'none';
        document.getElementById("phistory").style.display = 'block';
        
        break;
        case "appointment":
        document.getElementById("personal").style.display = 'none';
        document.getElementById("contact").style.display = 'none';
        document.getElementById("lab").style.display = 'none';
        document.getElementById("prescription").style.display = 'none';
        document.getElementById("history").style.display = 'none';
        document.getElementById("allergies").style.display = 'none';
        document.getElementById("key").style.display = 'none';
        document.getElementById("doc").style.display = 'none';
        document.getElementById("phistory").style.display = 'none';
        document.getElementById("appointment").style.display = 'none';
        document.getElementById("show").style.display = 'none';
        document.getElementById("appointment").style.display = 'block';
        
        break;
        case "show":
        document.getElementById("personal").style.display = 'none';
        document.getElementById("contact").style.display = 'none';
        document.getElementById("lab").style.display = 'none';
        document.getElementById("prescription").style.display = 'none';
        document.getElementById("history").style.display = 'none';
        document.getElementById("allergies").style.display = 'none';
        document.getElementById("key").style.display = 'none';
        document.getElementById("doc").style.display = 'none';
        document.getElementById("phistory").style.display = 'none';
        document.getElementById("appointment").style.display = 'none';
        document.getElementById("show").style.display = 'none';
        document.getElementById("show").style.display = 'block';
        
        break;
        
    }
  }
</script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
// function toggleStatus (pid) {
//     var id = pid;
//     $.ajax({
//       url:"toggle.php",
//       type:"post",
//       data: {
//               value: $('input[type=checkbox]').val()
//           },
//       success: function (data) {
//       if (result == '1') {
//         swal ("Done!","status is ON","success");
//       }
//       else {
//         swal ("Done!","status is OFF","success");
//       }
//       }
//     });
//     }
$(document).ready(function(){
  $("input[type=checkbox]").click(function () {
      $.ajax({
          type: "POST",
          url: "toggle.php",
          data: {
              value: $(this).prop("checked") ? 1 : 0
          },
          success: function(data) {
              $('.check').html(data);
          }
      });
  });
});
</script>

</body>


<script src="https://cdn.usebootstrap.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.usebootstrap.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</html>