<?php
include('includes/dheader.php');
?>
<div id="content" class="p-0 p-md-0 pt-0" style="margin-left:10vw;">
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
						  <label for="phone">Registration No.</label>
						  <input type="text" class="form-control" name="regno" id="phone" placeholder="Enter phone number" value=<?php echo $regno; ?>>
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
</div>

<?php
include('includes/dscript.php');
?>