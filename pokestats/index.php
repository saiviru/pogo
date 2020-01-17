<?php
	require_once('connection.php');
	session_start();
	if(isset($_SESSION['User'])){
		header('location:main.php');
	}
	else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="style.css">
<!--===============================================================================================-->

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<form class="login100-form validate-form" action="process.php" method="post">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<div class="col-4 col-sm-6 col-md-6 col-lg-6 mx-auto">
						<img src="images/pokeball.png" class="img-responsive fit-image">
					</div>


					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<?php
							if(@$_GET['Empty']==true)
							{
								?>
								<div class="text-danger text-center py-3">
									<?php echo $_GET['Empty']?>
								</div>
								<?php
							}
						 ?>

						 <?php
							 if(@$_GET['invalid']==true)
							 {
								 ?>
								 <div class="text-danger text-center py-3">
									 <?php echo $_GET['invalid']?>
								 </div>
								 <?php
							 }


							?>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="login">
								Login
							</button>
						</div>
					</div>
					<a class="txt2" href="passwordRecovery/index.php">
						Forgot Password
					</a>?

					<div class="text-center p-t-55">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="register.php">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<!--===============================================================================================-->


<!--===============================================================================================-->

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php
}
?>
