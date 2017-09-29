<?php
include("connection.php");
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
if($_SERVER["REQUEST_METHOD"] == "POST") {

	$myusername = $_POST['email'];
    $mypassword = $_POST['password'];
    $sql = "SELECT id FROM users WHERE email = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1) {
    	$_SESSION['login_user'] = $myusername;
    	//echo"login successful";
    	echo"1";
    }else{
    	echo"2";
    }

}
?>
