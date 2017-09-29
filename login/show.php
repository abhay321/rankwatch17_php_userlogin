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
include('footer.php');
?>