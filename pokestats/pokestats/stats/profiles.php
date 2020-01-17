<?php
  require_once('../connection.php');
  session_start();

  if(isset($_GET['id'])){
    $id=$_GET['id'];
  }
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


  <?php


  $results=$con->query("SELECT * from user where id=$id") or die($con->error());
  $row=$results->fetch_array();

  ?>

  <div class="header1 text-center">
    <h3>Stats for Trainer, <b class="header__title"><?php echo $row['username'];?></b> </h1>


  </div>
  <div class="header1 text-center">
    <h3>Trainer Code: <b class="header__title"><?php echo $row['trainer_code'];?></b> </h1>
  </div>
    <div class="header1 text-center">
    <h3>Trainer Team: <b class="header__title"><?php echo $row['trainer_team'];?></b> </h1>
  </div>


  <div class="wrapper">
    <div class="container">
      <div class="header">
        <h1 class="header__title">Pokédex Count</h1>
        <span class="mx-auto">
          <img src="https://img.icons8.com/color/96/000000/pokebag.png" class="img-responsive fit-image">
        </span>
      </div>

      <div class="cards text-center">
        <div class="card carded rounded button grow">
          <div class="card__inner ">
            <span class="mx-auto ">
              <h2 class="body-title">Kanto</h2>
              <img src="../images/badge_pokedex_entries.png" class="img-responsive fit-image mx-auto">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['kanto']; ?></b></h3>
          </div>
        </div>
        <div class=" card carded rounded button grow">
          <div class="body-title">
            <h2 class="text-center">Johto</h2>
            <span class="mx-auto">
              <img src="../images/badge_pokedex_entries_gen2.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['johto']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded  rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Hoenn</h2>
            <span class="mx-auto">
              <img src="../images/badge_pokedex_entries_gen3.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['hoenn']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Sinnoh</h2>
            <span class="mx-auto">
              <img src="../images/badge_pokedex_entries_gen4.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['sinnoh']; ?></b></h3>

          </div>
        </div>


      </div>
    </div><!--Container END-->
  </div>



  <div class="wrapper text-center">
    <div class="container">
      <div class="header">
        <h1 class="header__title">Battle Wins</h1>
        <span class="mx-auto">
          <img src="https://img.icons8.com/color/96/000000/pokebag.png" class="img-responsive fit-image">
        </span>
      </div>

      <div class="cards text-center mx-auto">
        <div class="card carded rounded button grow">
          <div class="card__inner">
            <span class="mx-auto ">
              <h2 class="body-title">Great League</h2>
              <img src="../images/badge_great_league.png" class="img-responsive fit-image mx-auto">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['great_league_veteran']; ?></b></h3>
          </div>
        </div>
        <div class=" card carded rounded button grow">
          <div class="body-title">
            <h2 class="text-center">Ultra League</h2>
            <span class="mx-auto">
              <img src="../images/badge_ultra_league.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['ultra_league_veteran']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Master League</h2>
            <span class="mx-auto">
              <img src="../images/badge_master_league.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['master_league_veteran']; ?></b></h3>

          </div>
        </div>

      </div>
    </div><!--Container END-->
  </div>

  <div class="wrapper text-center">
    <div class="container">
      <div class="header">
        <h1 class="header__title">Random Stats</h1>
        <span class="mx-auto">
          <img src="https://img.icons8.com/color/96/000000/pokebag.png" class="img-responsive fit-image">
        </span>
      </div>

      <div class="cards text-center mx-auto">
        <div class="card carded rounded button grow">
          <div class="card__inner">
            <span class="mx-auto ">
              <h2 class="body-title">Backpacker</h2>
              <img src="../images/badge_pokestops_visited.png" class="img-responsive fit-image mx-auto">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['backpacker']; ?></b></h3>
          </div>
        </div>
        <div class=" card carded rounded button grow">
          <div class="body-title">
            <h2 class="text-center">Idol</h2>
            <span class="mx-auto">
              <img src="../images/badge_max_level_friends.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['idol']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Collector</h2>
            <span class="mx-auto">
              <img src="../images/badge_capture_total.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['collector']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Scientist</h2>
            <span class="mx-auto">
              <img src="../images/badge_evolved_total.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['scientist']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded  rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Battle Girl</h2>
            <span class="mx-auto">
              <img src="../images/badge_pokedex_entries_gen3.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['battle_girl']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded  rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Battle Legend</h2>
            <span class="mx-auto">
              <img src="../images/badge_legendary_battle_won.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['battle_legend']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded  rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Pokemon Ranger</h2>
            <span class="mx-auto">
              <img src="../images/badge_challenge_quests.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['pokemon_ranger']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded  rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Berry Master</h2>
            <span class="mx-auto">
              <img src="../images/badge_berries_fed.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['berry_master']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded  rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Jogger</h2>
            <span class="mx-auto">
              <img src="../images/badge_pokedex_entries_gen3.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['jogger']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded  rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Breeder</h2>
            <span class="mx-auto">
              <img src="../images/badge_hatched_total.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['breeder']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded  rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Pikachu Fan</h2>
            <span class="mx-auto">
              <img src="../images/badge_pikachu.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['pikachu_fan']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded  rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Gym Leader</h2>
            <span class="mx-auto">
              <img src="../images/badge_hours_defended.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['gym_leader']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded  rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Champion</h2>
            <span class="mx-auto">
              <img src="../images/badge_raid_battle_won.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['champion']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded  rounded button grow">
          <div class="card__inner">
            <h2 class="body-title"> Gentleman</h2>
            <span class="mx-auto">
              <img src="../images/badge_trading.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['gentleman']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded  rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Pilot</h2>
            <span class="mx-auto">
              <img src="../images/badge_trading_distance.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['pilot']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded  rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Fisherman</h2>
            <span class="mx-auto">
              <img src="../images/badge_big_magikarp.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['fisherman']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded  rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Ace Trainer</h2>
            <span class="mx-auto">
              <img src="../images/badge_battle_training_won.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['ace_trainer']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded  rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Cameraman</h2>
            <span class="mx-auto">
              <img src="../images/badge_photobomb.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['cameraman']; ?></b></h3>

          </div>
        </div>
        <div class=" card carded  rounded button grow">
          <div class="card__inner">
            <h2 class="body-title">Youngster</h2>
            <span class="mx-auto">
              <img src="../images/badge_small_rattata.png" class="img-responsive fit-image">
            </span>
            <br>
            <br>
            <h3><b class="number"><?php echo $row['youngster']; ?></b></h3>

          </div>
        </div>



      </div>

    </div><!--Container END-->
  </div>






  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/main.js">  </script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>
</body>
