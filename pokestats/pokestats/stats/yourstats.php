<?php
$id=$_SESSION['id'];

$results=$con->query("SELECT * from user where id=$id") or die($con->error());
$row=$results->fetch_array();

?>

<div class="header1 text-center">
  <h1 class="header1__title">Welcome Trainer, <b class="header__title"><?php echo $row['username']?></b> </h1>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
    Add/Edit Stats <i class="far fa-edit"></i>
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
              <strong>Add/Edit Stats</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">

              <!-- Form -->
              <?php include('addStats.php'); ?>
              <!-- Form -->

            </div>

          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="fa fa-arrow-circle-left pr-5" style="color:red" ></span>
    <span class="sr-only ">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="fa fa-arrow-circle-right pl-5" style="color:red" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

      </div>
      <!-- Material form login -->
    </div>
  </div>

</div><!-- end of Edit modal code-->

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
            <img src="images/badge_pokedex_entries.png" class="img-responsive fit-image mx-auto">
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
            <img src="images/badge_pokedex_entries_gen2.png" class="img-responsive fit-image">
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
            <img src="images/badge_pokedex_entries_gen3.png" class="img-responsive fit-image">
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
            <img src="images/badge_pokedex_entries_gen4.png" class="img-responsive fit-image">
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
            <img src="images/badge_great_league.png" class="img-responsive fit-image mx-auto">
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
            <img src="images/badge_ultra_league.png" class="img-responsive fit-image">
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
            <img src="images/badge_master_league.png" class="img-responsive fit-image">
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
            <img src="images/badge_pokestops_visited.png" class="img-responsive fit-image mx-auto">
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
            <img src="images/badge_max_level_friends.png" class="img-responsive fit-image">
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
            <img src="images/badge_capture_total.png" class="img-responsive fit-image">
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
            <img src="images/badge_evolved_total.png" class="img-responsive fit-image">
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
            <img src="images/badge_pokedex_entries_gen3.png" class="img-responsive fit-image">
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
            <img src="images/badge_legendary_battle_won.png" class="img-responsive fit-image">
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
            <img src="images/badge_challenge_quests.png" class="img-responsive fit-image">
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
            <img src="images/badge_berries_fed.png" class="img-responsive fit-image">
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
            <img src="images/badge_pokedex_entries_gen3.png" class="img-responsive fit-image">
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
            <img src="images/badge_hatched_total.png" class="img-responsive fit-image">
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
            <img src="images/badge_pikachu.png" class="img-responsive fit-image">
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
            <img src="images/badge_hours_defended.png" class="img-responsive fit-image">
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
            <img src="images/badge_raid_battle_won.png" class="img-responsive fit-image">
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
            <img src="images/badge_trading.png" class="img-responsive fit-image">
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
            <img src="images/badge_trading_distance.png" class="img-responsive fit-image">
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
            <img src="images/badge_big_magikarp.png" class="img-responsive fit-image">
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
            <img src="images/badge_battle_training_won.png" class="img-responsive fit-image">
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
            <img src="images/badge_photobomb.png" class="img-responsive fit-image">
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
            <img src="images/badge_small_rattata.png" class="img-responsive fit-image">
          </span>
          <br>
          <br>
          <h3><b class="number"><?php echo $row['youngster']; ?></b></h3>

        </div>
      </div>



    </div>

  </div><!--Container END-->
</div>
<div class="header1 text-center">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
    Add/Edit Stats <i class="far fa-edit"></i>
  </button>

</div>
