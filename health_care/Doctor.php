<?php
include("config.php");
  session_start();
  if(isset($_SESSION['did'])){
    $did = $_SESSION['did'];
    $sql = "SELECT * FROM `doctor` WHERE `did` = $did";
    $result = mysqli_query($mysqli, $sql);
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        $fname = $row['fname'];
        $lname = $row['lname'];
        $age = $row['age'];
        $regno = $row['regno'];
        $special = $row['special'];
        $experience = $row['experience'];
        $curpos = $row['curpos'];
        $qualification = $row['qualification'];
        $email = $row['email'];
       
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
  	<title>Doctor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
	<script type="text/javascript">
    function preventBack() {window.history.forward()};
    setTimeout("preventBack()",0);
    window.onunload-function(){null; }
    </script>
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
	          <li class="active">
	            <a onclick="changeContent('profile')">Profile</a>
	          </li>
	          <li>
              <a onclick="changeContent('list')" >Patient List</a>
              
	          </li>
			  <li>
              <a onclick="changeContent('show')" >Check Appointment</a>
	          </li>

	         <li class="active">
            <a onclick="logout()">Logout</a>
          </li>

	        </ul>
	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-0 p-md-0 pt-0">
		<section id="profile">
			<div class="container">
				<div class="row gutters">
				<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
				<div class="card1 mt-20">
				  <div class="card-body">
					<div class="account-settings">
					  <div class="user-profile">
						<div class="user-avatar">
						  <img src="images/doctor-profile.png" alt="Maxwell Admin">
						</div>
						<h5 class="user-name">Dr. <?php echo $fname; ?> <?php echo $lname; ?></h5>
                      <h6 class="user-email"><?php echo $email; ?></h6>
					  </div>
					  <div class="about">
						<h5>About</h5>
						<p>I'm <?php echo $fname; ?>.  <?php echo $curpos; ?>.</p>
					  </div>
					</div>
				  </div>
				</div>
				</div>
				<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 ">
				<form action="update_ddetails.php" method="post">
				<div class="card h-100">
				  <div class="card-body">
					<div class="row gutters">
					  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mb-2 text-primary">Personal Details</h6>
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
					  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
						  <label for="eMail">Age</label>
						  <input type="number" class="form-control" name="age" id="eMail" placeholder="Enter age" value=<?php echo $age; ?>>
						</div>
					  </div>
					  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
						  <label for="phone">Phone</label>
						  <input type="number" class="form-control" name="regno" id="phone" placeholder="Enter phone number" value=<?php echo $regno; ?>>
						</div>
					  </div>
					  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
						  <label for="phone">Specialization</label>
						  <input type="text" class="form-control" name="special" id="phone" placeholder="Enter your specialization" value=<?php echo $special; ?>>
						</div>
					  </div>
					  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
						  <label for="phone">Experience</label>
						  <input type="number" class="form-control" name="experience" id="phone" placeholder="Enter your experience" value=<?php echo $experience; ?>>
						</div>
					  </div>
					  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
						  <label for="phone">Current Position</label>
						  <input type="text" class="form-control" name="curpos" id="phone" placeholder="Enter your current position" value=<?php echo $curpos; ?>>
						</div>
					  </div>
					  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
						  <label for="phone">Qualification</label>
						  <input type="text" class="form-control" name="qualification" id="phone" placeholder="Enter your qualification" value=<?php echo $qualification; ?>>
						</div>
					  </div>
					  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
						  <label for="website">EmailL</label>
						  <input type="email" class="form-control" name="email" id="website" placeholder="Website url" value=<?php echo $email; ?>>
						</div>
					  </div>
					</div>
					
					<div class="row gutters">
					  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="text-right">
						  <input type="submit" id="submit" name="submit" class="btn btn-primary" value="Update">
						  
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
		  <section id="list">
		<div class="s130">
		<form method="POST">
			<div class="inner-form">
			<div class="input-field first-wrap">
				<div class="svg-wrapper">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
					<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
				</svg>
				</div>
				<input name="getid" id="getid" type="text" placeholder="Enter Patient's key" required >
			</div>
			<div class="input-field second-wrap">
				<input onclick="changeContent('list')" name="search" class="btn-search" type="submit" value="Search" />
			</div>
		</div>
		</form>
    </div>
			<?php
			$connection = mysqli_connect("localhost", "root", "", "healthcare");
			if(isset($_POST['search']))
				{
					
					$uid = $_POST['getid'];
					$sql5 = "SELECT pid,fname,lname,age,email,uid FROM `patient` WHERE uid= $uid AND status= 1 ";
					$query_run5 = mysqli_query($connection, $sql5);
					if(mysqli_num_rows($query_run5) > 0)
					{
						while($row5 = mysqli_fetch_array($query_run5))
						{
							?>
				<div class="table-responsive">
					<div class="table-wrapper">
						<div class="table-title">
							<div class="row">
								<div class="col-sm-4">
									<h2>Patient <b>List</b></h2>
								</div>
								
							</div>
						</div>
						<div class="table-filter">
							<div class="row">
								<div class="col-sm-3">
									
								</div>
								<!-- <form> -->
								<div class="col-sm-9">
									
								
						</div> 
					
						<table class="table table-striped table-hover">
							<thead>
								<tr>
								<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Age</th>						
									<th>Email</th>						
									<th>Medical History</th>
									<th>Personal Details</th>
									<th>Add Details</th>
								</tr>
							</thead>
							<tbody>
							
							
							
								
							<tr>
									<td><?php echo $row5['pid'];?></td>
									<td><?php echo $row5['fname'];?></td>
									<td><?php echo $row5['lname'];?></td>
									<td><?php echo $row5['age'];?></td>                        
									<td><span class="status text-success">&bull;</span><?php echo $row5['email'];?></td>
									<td><a href="History.php?pid=<?php echo $row5['pid']; ?>" class="view" title="View Details" data-toggle="tooltip"><i class="material-icons"></i></a></td>
									<td><a href="Pdetails.php?pid=<?php echo $row5['pid']; ?>" class="view" title="View Details" data-toggle="tooltip"><i class="material-icons"></i></a></td>
									<td><a href="add_details.php?pid=<?php echo $row5['pid']; ?>" class="view" title="View Details" data-toggle="tooltip"><i class="material-icons"></i></a></td>
								</tr>
		
							</tbody>
						</table>
						
					</div>
				</div>        
							<?php
						}
					}
					else{
						echo "No data found or access denied";
					}
				}
			?>
			
			
	
		  </section>
		  <section id="upload">
        <div class="py-20 h-screen bg-gray-300 px-2">
          <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
              <div class="w-full px-4 py-6 ">
              <form action="help.php" method="post" enctype="multipart/form-data">
                <div class="mb-1">
                  <span class="text-sm">Report Date</span>
                  <input type="text" name="report_date" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600"/>
                </div>

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
      </section> 
	  
            <section id="show">
				
            <section class="main-content">
            <div class="container">
              <h1>Appointments</h1>
              <br>
              <br>

              <div class="row">
				
                <?php
				
                 $sql4="SELECT * FROM `pappointment` WHERE `did`=$did";
               	$result_sql4=mysqli_query($mysqli, $sql4);
                  if(mysqli_num_rows($result_sql4) > 0){
                    while($row3=mysqli_fetch_assoc($result_sql4)){
						if(strtotime($row3['adate'])>=strtotime(date('Y-m-d'))){
                   
                ?>
                <div class="col-sm-6 col-md-6 col-lg-4">
                  <div class="card bg-white p-3 mb-4 shadow">
                    <div class="d-flex justify-content-between mb-4">
                      <div class="user-info">
                        
                        <div class="user-info__basic">
                          <h5 name="name" class="mb-0"><?php echo $row3['aname']?></h5>
                          
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
	</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
  <script>
	
  function logout() {
    window.location.href = 'logout.php';
  }
  	
	function changeContent(tab){
	 switch(tab){
	   case "profile":
		   document.getElementById("profile").style.display='none';
		   document.getElementById("list").style.display='none';
		   document.getElementById("upload").style.display='none';
		   document.getElementById("show").style.display='none';
		   document.getElementById("profile").style.display='block';
		   break;
	   case "list":
		   document.getElementById("profile").style.display='none';
		   document.getElementById("list").style.display='none';
		   document.getElementById("upload").style.display='none';
		   document.getElementById("show").style.display='none';
		   document.getElementById("list").style.display='block';
		   break;
		
		case "upload":
		   document.getElementById("profile").style.display='none';
		   document.getElementById("list").style.display='none';
		   document.getElementById("upload").style.display='none';
		   document.getElementById("show").style.display='none';
		   document.getElementById("upload").style.display='block';
		   break;
		
		case "show":
		   document.getElementById("profile").style.display='none';
		   document.getElementById("list").style.display='none';
		   document.getElementById("upload").style.display='none';
		   document.getElementById("show").style.display='none';
		   document.getElementById("show").style.display='block';
		   break;
		}

    
	}

</script>
</html>