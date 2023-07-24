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
        <h1><a href="Doctor2.php" class="logo">MediCare</a></h1>
        <ul class="list-unstyled components mb-5">



          <li>
            <a href="addprescription.php?pid=<?php echo $pid; ?>">Upload Prescription</a>
          </li>

          <li>
            <a href="addlab.php?pid=<?php echo $pid; ?>">Upload Lab Report</a>
          </li>

          <li class="active">
            <a href="index.html">Home</a>
          </li>

          <li class="active">
            <a onclick="logout()">Logout</a>
          </li>

        </ul>
      </div>
    </nav>

<div id="content" class="mainbody" class="p-0 p-md-0 pt-0" style="margin-left: 10vw;">
<div class="py-20 h-screen bg-white-300 px-2">
          <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
              <div class="w-full px-4 py-6 ">
              <form action="helpd.php" method="post" enctype="multipart/form-data">
                <div class="mb-1">
                <div>Upload Prescription</div>
                  <span class="text-sm">Report Date</span>
                  <input type="date" name="report_date" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600"/>
                </div>
                <input type="hidden" name="type" value="pre">
                <input type="hidden" name="pid" value="<?php echo $pid; ?>">

                <div class="mb-1">
                  <span class="text-sm">Description</span>
                  <textarea type="text" name="description" class="h-24 py-1 px-3 w-full border-2 border-blue-400 rounded focus:outline-none focus:border-blue-600 resize-none"></textarea>
                </div>

                <div class="mb-1">
                  <span class="text-sm text-gray-400">You will be able to edit this information later</span>
                </div>

                <div class="mb-1">

                  <span>Attachments</span>

                  

                    <input type="file" name="file" size="50" />

                    <br />

                    <input  class="btn btn-primary" type="submit" value="Upload" />

                  </form>



                </div>
              </div>
            </div>
          </div>
      </section>
      <section id="history">
      <div class="py-20 h-screen bg-gray-300 px-2">
          <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
              <div class="w-full px-4 py-6 ">
              <form action="help.php" method="post" enctype="multipart/form-data">
                <div class="mb-1">
                  <span class="text-sm">Report Date</span>
                  <input type="text" name="report_date" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600"/>
                </div>
                <input type="hidden" name="type" value="history">

                <div class="mb-1">
                  <span class="text-sm">Description</span>
                  <textarea type="text" name="description" class="h-24 py-1 px-3 w-full border-2 border-blue-400 rounded focus:outline-none focus:border-blue-600 resize-none"></textarea>
                </div>

                <div class="mb-1">
                  <span class="text-sm text-gray-400">You will be able to edit this information later</span>
                </div>

                <div class="mb-1">

                  <span>Attachments</span>

                  

                    <input type="file" name="file" size="50" />

                    <br />

                    <input type="submit" value="Upload" />

                  </form>



                </div>
              </div>
            </div>
          </div>
</div>
</div>
<?php
include('includes/script.php');
?>