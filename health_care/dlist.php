<?php
include('includes/dheader.php');
?>
<div id="content" class="p-0 p-md-0 pt-0" style="margin-left:10vw;">
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
				<div class="table-responsive" style="margin-left:12vw;">
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
									<td><a href="adddetails2.php?pid=<?php echo $row5['pid']; ?>" class="view" title="View Details" data-toggle="tooltip"><i class="material-icons"></i></a></td>
								</tr>
		
							</tbody>
						</table>
						
					</div>
				</div>        
							<?php
						}
					}
					else{
						echo '<div style="text-align: center;">No data found or access denied</div>';
					}
				}
			?>
			</div>
<?php
include('includes/dscript.php');
?>