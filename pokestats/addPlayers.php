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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="style.css">
    </head>

    <body style="background:#ccc;">
        <?php include('header.php'); ?>

        <?php
$id=$_SESSION['id'];

$results=$con->query("SELECT * from user where id=$id") or die($con->error());
$row=$results->fetch_array();

?>

            <h1 align="center">Welcome to the battle: </h1>

            <div id="dynamicCheck">
                <input type="button" value="Add Trainer" onclick="createNewElement();" />
            </div>
            <div class="form-row">
              <div class="col-md-4 text-center">
              <input type="email" class="form-control" id="inputEmail4" placeholder="">
            </div>
      </div>
            <br>
    
            <script type="text/JavaScript">
            var a=true;
              function createNewElement() {
                  // First create a DIV element.
                
                var txtNewInputBox = document.createElement('div');
                var x=document.getElementById("newElementId");
              
                  // Then add the content (a new input box) of the element.
                txtNewInputBox.innerHTML = "<input type='text' id='user-name'>";
              
                  // Finally put it where it is supposed to appear.
    
                if(a)
                   {
                     x.appendChild(txtNewInputBox);
                     console.log("new id: ",x);
                     a=false;
                    }
                else
                {
                  console.log("new id: ",x);
                  x.removeChild(x.childNodes[1]);
                  
                  console.log("a: "+ a);
                  a=true;
    
                }
                
              }
              </script>


            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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