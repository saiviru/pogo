<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('connection.php');
if(isset($_POST['submit']))
{
//$username=$name=$email=$password=$pwd='';

$username=$_POST['username'];
$name=$_POST['name'];
$email=$_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$status='false';
$admin='no';

$sql="INSERT into user(username,name,email,password,status,admin) VALUES ('$username','$name','$email','$password','$status','$admin')";
//$sql="INSERT into user (username, name, email, password) VALUES(:username ,:name,:email,:password)";
//$query= $con ->  prepare($sql);
/*
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':name', $name, PDO::PARAM_STR);
$query -> bindParam(':email', $email, PDO::PARAM_STR);
$query -> bindParam(':password', $password, PDO::PARAM_STR);
$query ->execute();*/
$result = mysqli_query($con, $sql);
//$lastInsertId = $con->lastInsertId();
if($result)
{
  echo "<script type='text/javascript'>alert('Registration Sucessfull!');</script>";
  echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}
else {
  echo "<script type='text/javascript'>alert('username was already used');</script>";
  echo "<script type='text/javascript'> document.location = 'register.php'; </script>";
}
}
 ?>
