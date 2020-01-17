<?php

require_once('connection.php');
session_start();
$username=$password=$pass='';
$username=$_POST['username'];
$password=$_POST['password'];
$pass=MD5($password);
  if(isset($_POST['login']))
  {
    if(empty($username) || empty($password))
    {
      header("location:index.php?Empty=please fill the details");
    }
    else{
      $query="select * from user where username='".$username."' and password='".$pass."'";
            $result=mysqli_query($con,$query);

      if(mysqli_fetch_assoc($result))
      {
        $_SESSION['User']=$_POST['username'];
        $query="select id, status,admin from user where username='".$username."' and password='".$pass."'";
              $result=mysqli_query($con,$query);
              $row=$result->fetch_array();
        $_SESSION['id']=$row['id'];
        $_SESSION['status']=$row['status'];
        $_SESSION['admin']=$row['admin'];
        header("Location:main.php");

      }
      else{
        header("location:index.php?invalid=Please check your credentials");
      }
    }
  }
  else{
    echo "not working";
  }


 ?>
