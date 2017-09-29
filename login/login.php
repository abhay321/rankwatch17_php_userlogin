<?php
include('header.php');
?>
<div class="container">
    <h1 class="well">Login Form</h1>
	<div class="col-lg-12 well">
		<div class="row">
				<form method="post" action="" onsubmit="validatelofinform()" name="loginform">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Email Address</label>
								<input type="email" name="email" id="email" placeholder="Enter Email Address Here.." class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="password" name="pass" id="pass" placeholder="Enter Password Here.." class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<button type="submit" class="btn btn-lg btn-info">Login</button>
								If You are not a registered user register
								<a href="register.php">here</a>
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