<?php
include("connection.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $sql = "SELECT email FROM users WHERE email='$email'";
    $resultset = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($resultset);
    if(!$row['email']){
        $sql = "INSERT INTO users(`id`, `name`, `email`, `password`, `mobile`, `age`, `gender`, `address`, `country`, `state`) VALUES (NULL, '$name', '$email', '$password', '$mobile', '$age', '$gender', '$address', '$country', '$state')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo"1";
        }else{
            echo"3";
        }

    }else{
        echo"2";
    }
}
?>
