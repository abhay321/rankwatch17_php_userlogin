<?php
include('header.php');
session_start();
if (!isset($_SESSION["login_user"]))
   {
      header("location: login.php");
   }
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="http://localhost/login/">Home</a></li>
        <li class="active"><a href="http://localhost/login/show.php">All Record</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost/login/logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php
$sql="SELECT * FROM users";
if ($result=mysqli_query($con,$sql))
	{
  	// Fetch one and one row
?>
<div class="container">
  <h2>Users Data</h2>            
  <table class="table">
    <thead>
      <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Mobile</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Country</th>
        <th>State</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    		while ($row = mysqli_fetch_row($result)){
    	?>
      <tr>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[2];?></td>
        <td><?php echo "XXXXXXX";?></td>
        <td><?php echo $row[4];?></td>
        <td><?php echo $row[5];?></td>
        <td><?php echo $row[6];?></td>
        <td><?php echo $row[7];?></td>
        <td><?php echo $row[8];?></td>
        <td><?php echo $row[9];?></td>
      </tr>
      <?php
      	}
      	}
      ?>
    </tbody>
  </table>
</div>
<?php
include('footer.php');
?>
