<?php
session_start();
$useverrname=" Localhost";
$fname="firstname";
$lname="lastname";
$email="email";
$pass="password";
$personal= "";
$work="";


//create connection
$con =new Mysqli('localhost'),$fname,$lname,$email,$pass);
if($con->connect_error){
  die("connection failed:". $con->connect_error);
}

$sql = "create database myDB";
if($conn->query($sql) === true)
{
  echo "database created successfully";
}
else{
echo "error creating databse". $conn->error;
}
$conn->close();

// $firstname=$_POST['fname'];
// $lastname = $_POST['lname'];
// $email= $_POST['email'];
// $pass = $_POST['password'];

?>
