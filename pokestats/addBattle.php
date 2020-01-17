<form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <div class="carousel-item active">

        <div class="form-group">
            <label for="battleName">Battle Name:</label>
            <input type="text" name="battleName" class="form-control">
        </div>
        <div class="form-group">
		<button class="login100-form-btn" type="submit" name="submit">
								Add Battle
							</button>
        </div>
    </div>

</form>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('connection.php');
if(isset($_POST['submit']))
{
$battleName=$_POST['battleName'];

$sql="INSERT into battle(draftBattle) VALUES ('$battleName')";

$result = mysqli_query($con, $sql);
if($result)
{
  echo "<script type='text/javascript'>alert('Added');</script>";
  echo "<script type='text/javascript'> document.location = 'battles.php'; </script>";
}
else {
  echo "<script type='text/javascript'>alert('Not Added');</script>";
  echo "<script type='text/javascript'> document.location = 'battles.php'; </script>";
}
}
 ?>
