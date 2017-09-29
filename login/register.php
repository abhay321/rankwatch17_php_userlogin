<?php
include('header.php');
?>
<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form class="form-horizontal" action="" method="post" onsubmit="validateregform()"  id="rForm">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Full Name</label>
								<input type="text" placeholder="Enter Full Name Here.." class="form-control" name="fullname" id="fullname">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Email Address</label>
								<input type="email" placeholder="Enter Email Address Here.." class="form-control" name="email" id="email">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="password" placeholder="Enter Password Here.." class="form-control" name="pwd" id="pwd">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Mobile Number</label>
								<input type="number" placeholder="Enter Mobile Number Here.." class="form-control" name="mobile" id="mobile">
							</div>
						</div>
						<div class="row">
						    	<div class="form-group col-sm-6">
        							<label>Gender</label><br>
        							<select name="gender" class="form-control" id="gender">
                                		<option value="">Select your Gender</option>
                                		<option value="male">Male</option>
                                		<option value="female">Female</option>
                            		</select>
    							</div>
    							<div id="genderr"></div>
    					</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Age</label>
								<input type="number" placeholder="Enter Your Age Here.." class="form-control" name="age" id="age" min="1">
							</div>
						</div>							
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Address</label>
								<textarea placeholder="Enter Address Here.." rows="3" class="form-control" name="address" id="address"></textarea>
							</div>
						</div>
						<div class="row">
						    	<div class="form-group col-sm-6">
        							<label>Select Country</label><br>
        							<?php
        								$sql = "SELECT name FROM countries";
										$result = mysqli_query($con,$sql);
        							?>
        							<select name="country" class="form-control" id="country" onchange="country();">
        								<?php
                                			while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    										echo "<option value='" . $row['sortname'] ."'>" . $row['name'] ."</option>";
											}
											?>
                            		</select>
    							</div>
    					</div>
						<div class="row">
						    	<div class="form-group col-sm-6">
        							<label>Select State</label><br>
        							<select name="state" class="form-control" id="state">
                            		</select>
    							</div>
    					</div>		
						<div class="row">
							<div class="col-sm-6">
								<button type="submit" class="btn btn-lg btn-info">Register</button>
								Allredy Register Login
								<a href="login.php">here</a>
							</div>
						</div>					
					</div>
				</form> 
			</div>
		</div>
	</div>
<?php
include('footer.php');
?>