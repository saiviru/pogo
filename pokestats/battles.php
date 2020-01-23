<?php
require_once('connection.php');
session_start();

if(isset($_SESSION['User']))
{
  if($_SESSION['status']=='true')
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
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="style.css">
    </head>

    <body style="background:#ccc;">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <?php include('header.php'); ?>

        <?php
$id=$_SESSION['id'];

$results=$con->query("SELECT * from user where id=$id") or die($con->error());
$row=$results->fetch_array();

?>

            <h1 align="center">Welcome to draft battles space</h1>

            <div class="header1 text-center">
                <!-- <h1 class="header1__title">Welcome Trainer, <b class="header__title"><?php echo $row['username']?></b> </h1> -->

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
              Add a battle <i class="far fa-edit"></i>
            </button>
            </div>

            <!-- modal code for edit -->
            <div class="card-body modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div id="carouselExampleControls" class="carousel slide" data-interval="false" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel"></h5>
                                    <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>-->
                                </div>

                                <div class="card">

                                    <h5 class="card-header info-color white-text text-center py-4">
                                        <strong>Add a Battle Name</strong>
                                    </h5>

                                    <!--Card content-->
                                    <div class="card-body px-lg-5 pt-0">

                                        <!-- Form -->
                                        <?php include('addBattle.php'); ?>
                                        <!-- Form -->

                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- Material form login -->
                    </div>
                </div>

            </div>

            <div id="my-div">
                <a href="addPlayers.php" class="fill-div">Battles</a>
            </div>
            <!-- end of Edit modal code-->



            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script type="text/javascript" src="js/main.js">
            </script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>
    </body>

    <?php
}

else{
  ?>
        <h1 class="header1__title">You are not yet authorized, check with your local admin for granting rights.</h1>
        <a href="index.php">Go Back</a>
        <?php
}
}
else{
  header('location:index.php');
}
 ?>