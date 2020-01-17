<?php
require_once('connection.php');
session_start();
if(isset($_SESSION['User']))
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

</head>

<body style="background:#ccc;">
  <?php include('header.php'); ?>
  <div class="container">

  <?php
  $id=$_SESSION['id'];

  $results=$con->query("SELECT * from user where id=$id") or die($con->error());
  $row=$results->fetch_array();
  $name=$row['name'];
  $username=$row['username'];
  $email=$row['email'];
  $mobile=$row['mobile'];
  $code=$row['trainer_code'];
  $trainer_team=$row['trainer_team'];

  if(isset($_POST['submit']))
  {
    $eusername=$_POST['username'];
    $ename=$_POST['name'];
    $eemail=$_POST['email'];
    $emobile=$_POST['mobile'];
    $ecode=$_POST['trainer_code'];
    $etrainer_team=$_POST['trainer_team'];
    $update=$con->query("UPDATE user SET username = '$eusername', name='$ename', email='$eemail', mobile='$emobile', trainer_code='$ecode', trainer_team='$etrainer_team' where id=$id") or die($con->error());
    //$msg="Information Updated Successfully";

    if($update)
    {
      echo "<script type='text/javascript'>alert('Information updated successfully!');</script>";
      echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
    }
  }
  if(isset($_POST['updatepassword']))
  {
    if($_POST['password']==$_POST['password1']){
      $password=MD5($_POST['password']);
      $updates=$con->query("UPDATE user SET password='$password' where id=$id") or die($con->error());
    }
    if($updates){
      echo "<script type='text/javascript'>alert('Password changed successfully!');</script>";
      echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
    }

  }
  ?>
<!-- code for displaying profile items-->
  <div class="row justify-content-center">

    <div class="col-lg-4">
      <h2 class="text-center">User Profile</h2><br>
      <ul class="list-group ">
      <!--<li class="list-group-item"><b>id: </b><?php echo $_SESSION['id'] ?></li>-->
      <li class="list-group-item"><b>Username: </b><?php echo $username ?></li>
      <li class="list-group-item"><b>Name: </b> <?php echo $name ?></li>
      <li class="list-group-item"><b>Email: </b><?php echo $email ?></li>
      <li class="list-group-item"><b>Mobile: </b><?php echo $mobile ?></li>
      <li class="list-group-item"> <b>Team: </b><?php echo $trainer_team ?> </li>
      <li class="list-group-item"><b>Trainer Code: </b><?php echo $code; ?></li>
    </ul><br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
       Edit <i class="far fa-edit"></i>
    </button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPassword">
       Change password
    </button>
    </div>

  </div>
</div><!-- End of Container -->


<!-- modal code for edit -->
<div class="card-body modal fade" id="editPassword" tabindex="-1" role="dialog" aria-labelledby="editPasswordLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="editModalLabel">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>



      <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
          <strong>Change Password</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

          <!-- Form -->
          <form class="p-2"  method="post" action="">
        <!--<label class="col-sm-2 control-label">ID: <span style="color:red"><?php echo $id ?></span></label>-->
        <label class="col-sm-6 control-label">Password<span style="color:red">*</span></label>
        <input type="password" name="password" value="" class="form-control mb-3" placeholder="password">
        <label class="col-sm-6 control-label">Repeat Password<span style="color:red">*</span></label>
        <input type="password" name="password1" value="" class="form-control mb-3" placeholder="Repeat Password">
        <!--<input type="password" name="password" class="form-control mb-3" placeholder="Repeat Password">-->


        <button type="submit" name="updatepassword" class="btn btn-success">Update</button>
      </form>
          <!-- Form -->

        </div>

      </div>
      <!-- Material form login -->



    </div>
  </div>

</div><!-- end of Edit modal code-->

<!-- modal code for edit -->
<div class="card-body modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="editModalLabel">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>



      <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
          <strong>Edit</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

          <!-- Form -->
          <form class="p-2"  method="post" action="">
        <!--<label class="col-sm-2 control-label">ID: <span style="color:red"><?php echo $id ?></span></label>-->
        <label class="col-sm-6 control-label">Username<span style="color:red">*</span></label>
        <input type="text" name="username" value="<?php echo $username;?>" class="form-control mb-3" placeholder="Username">
        <label class="col-sm-6 control-label">Name<span style="color:red">*</span></label>
        <input type="text" name="name" value="<?php echo $name; ?>" class="form-control mb-3" placeholder="Name">
        <label class="col-sm-6 control-label">Email<span style="color:red">*</span></label>
        <input type="email" name="email" value="<?php echo $email; ?>" class="form-control mb-3" placeholder="Email">
        <label class="col-sm-6 control-label">Mobile<span style="color:red">*</span></label>
        <input type="number" name="mobile" value="<?php echo $mobile; ?>" class="form-control mb-3" placeholder="Mobile">
        <label class="col-sm-6 control-label">Trainer Code<span style="color:red">*</span></label>
        <input type="number" name="trainer_code" value="<?php echo $code; ?>" class="form-control mb-3" placeholder="Trainer Code">
        <select class="form-control mb-3" name="trainer_team">
          <option value="">Select your Team</option>
          <option value="Valor"
          <?php
    				if ($trainer_team=="Valor"){
    					echo "selected";
    				}
    			 ?>> Valor</option>
          <option value="Instinct"
          <?php
    				if ($trainer_team=="Instinct"){
    					echo "selected";
    				}
    			 ?>>Instinct</option>
          <option value="Mystic"
          <?php
    				if ($trainer_team=="Mystic"){
    					echo "selected";
    				}
    			 ?>>Mystic</option>

        </select>
        <!--<input type="password" name="password" class="form-control mb-3" placeholder="Repeat Password">-->
        <button type="submit" name="submit" class="btn btn-success">Update</button>
      </form>
          <!-- Form -->

        </div>

      </div>
      <!-- Material form login -->



    </div>
  </div>

</div><!-- end of Edit modal code-->

  ?>


  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<!-- if logged in user is not the user or user not logged in -->
<?php
}
else{
header('location:index.php');
}
?>
