<?php
include('includes/pheader.php');
?>


<div id="content" class="mainbody" class="p-0 p-md-0 pt-0" style="margin-left: 10vw;">
        
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
      
      </div>
<?php
include('includes/script.php');
?>