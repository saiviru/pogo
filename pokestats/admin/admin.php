<?php
require_once('../connection.php');
session_start();
$id=$_SESSION['id'];

if(isset($_SESSION['User']))
{
  if($_SESSION['admin']=='yes')
  {


  //echo "welcome user ".$_SESSION['User'] ."<br>";
  //echo "<a href='logout.php?logout'>Logout</a>";

  ?>

  <!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="saiviru">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../style.css">
</head>
<body style="background:#ccc;">
  <?php include('../header.php'); ?>

  <form class="" action="" method="post">
    <div class="table-responsive text-nowrap">
      <table id="example" class="table table-hover table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
          <tr>
            <td>#</td>
            <td>Username</td>
            <td>Status</td>
            <td></td>
          </tr>
        </thead>
        <?php
        $results=$con->query("SELECT * from user") or die($con->error());

        $j=1;
        $i=0;
        while($row = mysqli_fetch_array($results)){

        $status=$row['status'];
        ?>
        <tr>
          <td><?php echo $j; $j++; ?></td>
          <td>
          <input type="text" name="username" value="<?php echo $row['username'];?>" class="form-control mb-3" placeholder="Username"></td>

        <td>
          <select class="form-control mb-3" name="status">
            <option value="true"
            <?php
              if ($status=="true"){
                echo "selected";
              }
             ?>> True</option>
            <option value="false"
            <?php
              if ($status=="false"){
                echo "selected";
              }
             ?>>False</option>

          </select>
        </td>
        <td>
          <button type="submit" name="submit" class="btn btn-success">Update</button>
        </td>
        <td>
          <h1><?php echo $row['id']; ?></h1>
        </td>
        </tr>
        <?php
        $ide=$row['id'];
        $i++;
      }
         ?>
      </table>
      <h1><?php echo $id; ?></h1>
      <?php
      if(isset($_POST['submit']))
      {
        $username=$_POST['username'];
        $status=$_POST['status'];
        $update=$con->query("UPDATE user SET username = '$username', status='$status' where id=$ide") or die($con->error());
        //$msg="Information Updated Successfully";

        if($update)
        {
          echo "<script type='text/javascript'>alert('Information updated successfully!');</script>";
          echo "<script type='text/javascript'> document.location = 'admin.php'; </script>";
        }
        else{
          echo "error";
        }
      }
      ?>

    </div>

  </form>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/main.js">  </script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>
</body>





  <?php
}

else{
  ?>
  <h1 class="header1__title">You are not an admin</h1>
  <a href="../index.php">Go Back</a>
  <?php
}
}
else{
  header('location:index.php');
}
 ?>
