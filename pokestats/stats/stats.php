<?php
require_once('../connection.php');
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
<title>Pok&eacute;mon OU trainers list</title>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">

</head>
<body style="background:#ccc;">


<?php include('../header.php'); ?>

<div class="container wrapper">
  <h1 class="text-center">Pok&eacute;mon Go - OU Player Stats</h1>

  <?php
  $id=$_SESSION['id'];

  $results=$con->query("SELECT * from user where id=$id") or die($con->error());
  $row=$results->fetch_array();
  $trainer_name=$row['trainer_name'];
  $trainer_team=$row['trainer_team'];
  $trainer_code=$row['trainer_code'];
  $mobile=$row['mobile'];
  $code=$row['trainer_code'];
  $kanto=$row['kanto'];
  $johto=$row['johto'];
  $hoenn=$row['hoenn'];
  $sinnoh=$row['sinnoh'];
  $collector=$row['collector'];
  $scientist=$row['scientist'];
  $backpacker=$row['backpacker'];
  $battle_girl=$row['battle_girl'];
  $berry_master=$row['berry_master'];
  $gym_leader=$row['gym_leader'];
  $idol=$row['idol'];
  $great_league_veteran=$row['great_league_veteran'];
  $ultra_league_veteran=$row['ultra_league_veteran'];
  $master_league_veteran=$row['master_league_veteran'];
  $jogger=$row['jogger'];
  $breeder=$row['breeder'];
  $pikachu_fan=$row['pikachu_fan'];
  $champion=$row['champion'];
  $battle_legend=$row['battle_legend'];
  $pokemon_ranger=$row['pokemon_ranger'];
  $gentleman=$row['gentleman'];
  $pilot=$row['pilot'];
  $fisherman=$row['fisherman'];
  $ace_trainer=$row['ace_trainer'];
  $youngster=$row['youngster'];
  $cameraman=$row['cameraman'];
  //$total=$row['total'];



  if(isset($_POST['add']))
  {
    $etrainer_name=$_POST['trainer_name'];
    $kanto=$_POST['kanto'];
    $johto=$_POST['johto'];
    $hoenn=$_POST['hoenn'];
    $sinnoh=$_POST['sinnoh'];
    $collector=$_POST['collector'];
    $scientist=$_POST['scientist'];
    $backpacker=$_POST['backpacker'];
    $battle_girl=$_POST['battle_girl'];
    $berry_master=$_POST['berry_master'];
    $gym_leader=$_POST['gym_leader'];
    $idol=$_POST['idol'];
    $great_league_veteran=$_POST['great_league_veteran'];
    $ultra_league_veteran=$_POST['ultra_league_veteran'];
    $master_league_veteran=$_POST['master_league_veteran'];
    $jogger=$_POST['jogger'];
    $breeder=$_POST['breeder'];
    $pikachu_fan=$_POST['pikachu_fan'];
    $champion=$_POST['champion'];
    $battle_legend=$_POST['battle_legend'];
    $pokemon_ranger=$_POST['pokemon_ranger'];
    $gentleman=$_POST['gentleman'];
    $pilot=$_POST['pilot'];
    $fisherman=$_POST['fisherman'];
    $ace_trainer=$_POST['ace_trainer'];
    $youngster=$_POST['youngster'];
    $cameraman=$_POST['cameraman'];


    $update=$con->query("UPDATE user SET trainer_name = '$etrainer_name', kanto='$kanto', johto='$johto', hoenn='$hoenn',
      sinnoh='$sinnoh', collector='$collector', scientist='$scientist', backpacker='$backpacker', battle_girl='$battle_girl',
      berry_master='$berry_master', gym_leader='$gym_leader', idol='$idol', great_league_veteran='$great_league_veteran',
      ultra_league_veteran='$ultra_league_veteran', master_league_veteran='$master_league_veteran', jogger='$jogger',
      breeder='$breeder', pikachu_fan='$pikachu_fan', champion='$champion', battle_legend='$battle_legend',
      pokemon_ranger='$pokemon_ranger', gentleman='$gentleman', pilot='$pilot', fisherman='$fisherman', ace_trainer='$ace_trainer',
      youngster='$youngster', cameraman='$cameraman' where id=$id") or die($con->error());
    //$msg="Information Updated Successfully";

    if($update)
    {
      echo "<script type='text/javascript'>alert('Information updated successfully!');</script>";
      echo "<script type='text/javascript'> document.location = 'http://saiviru.in/pokestats/stats/stats.php'; </script>";
      $final_update=$con->query("UPDATE user SET total='$final_total' where id=$id") or die($con->error());
    }
  }

  ?>

  <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
     Add/Edit Stats <i class="far fa-edit"></i>
  </button>-->
  <!-- modal code for edit -->
  <div class="card-body modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Add/Edit Stats</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
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

        <!-- Material form login -->
      </div>
    </div>

  </div><!-- end of Edit modal code-->
<!-- Start of Table values displaying the stats, here is the HEAD-->
  <div class="table-responsive text-nowrap">
    <table id="example" class="table table-hover table-striped table-bordered table-sm" cellspacing="0" width="100%">
      <thead class="black white-text">
        <tr>
          <th>#</th>
          <th onclick="sortTable(0)">Trainer Name</th>
          <th onclick="sortTable(1)">Team</th>
          <th onclick="sortTable(2)">Trainer Code</th>
          <th onclick="sortTable(3)">Kanto</th>
          <th onclick="sortTable(4)">Johto</th>
          <th>Hoenn</th>
          <th>Sinnoh</th>
          <th>Collector</th>
          <th>Scientist</th>
          <th>Backpacker</th>
          <th>Battle Girl</th>
          <th>Berry Master</th>
          <th>Gym Leader</th>
          <th>Idol</th>
          <th>Great League Veteran</th>
          <th>Ultra League Veteran</th>
          <th>Master League Veteran</th>
          <th>Jogger</th>
          <th>Breeder</th>
          <th>Pikachu Fan</th>
          <th>Champion</th>
          <th>Battle Legend</th>
          <th>Pokemon Ranger</th>
          <th>Gentleman</th>
          <th>Pilot</th>
          <th>Fisherman</th>
          <th>Ace Trainer</th>
          <th>Youngster</th>
          <th>Cameraman</th>

        </tr>
        </thead>
        <!-- End of table HEAD-->
        <!-- displating the rows using while loop in PHP-->
        <?php
        $result=$con->query("SELECT * from user where status='true' order by total DESC") or die($con->error());
        $i=0;
        $kanto_total=array();
        $johto_total=array();
        $hoenn_total=array();
        $sinnoh_total=array();
        $collector_total=array();
        $scientist_total=array();
        $backpacker_total=array();
        $battle_girl_total=array();
        $berry_master_total=array();
        $gym_leader_total=array();
        $idol_total=array();
        $great_league_veteran_total=array();
        $ultra_league_veteran_total=array();
        $master_league_veteran_total=array();
        $jogger_total=array();
        $breeder_total=array();
        $pikachu_fan_total=array();
        $champion_total=array();
        $battle_legend_total=array();
        $pokemon_ranger_total=array();
        $gentleman_total=array();
        $pilot_total=array();
        $fisherman_total=array();
        $ace_trainer_total=array();
        $youngster_total=array();
        $cameraman_total=array();
        $j=1;
			while($row = mysqli_fetch_array($result)){

        $kanto_total[]=$row['kanto'];
        $johto_total[]=$row['johto'];
        $hoenn_total[]=$row['hoenn'];
        $sinnoh_total[]=$row['sinnoh'];
        $collector_total[]=$row['collector'];
        $scientist_total[]=$row['scientist'];
        $backpacker_total[]=$row['backpacker'];
        $battle_girl_total[]=$row['battle_girl'];
        $berry_master_total[]=$row['berry_master'];
        $gym_leader_total[]=$row['gym_leader'];
        $idol_total[]=$row['idol'];
        $great_league_veteran_total[]=$row['great_league_veteran'];
        $ultra_league_veteran_total[]=$row['ultra_league_veteran'];
        $master_league_veteran_total[]=$row['master_league_veteran'];
        $jogger_total[]=$row['jogger'];
        $breeder_total[]=$row['breeder'];
        $pikachu_fan_total[]=$row['pikachu_fan'];
        $champion_total[]=$row['champion'];
        $battle_legend_total[]=$row['battle_legend'];
        $pokemon_ranger_total[]=$row['pokemon_ranger'];
        $gentleman_total[]=$row['gentleman'];
        $pilot_total[]=$row['pilot'];
        $fisherman_total[]=$row['fisherman'];
        $ace_trainer_total[]=$row['ace_trainer'];
        $youngster_total[]=$row['youngster'];
        $cameraman_total[]=$row['cameraman'];


      ?>
      <!-- Countinuing with the body part of the table, displaying the values -->
        <tr>
          <td><?php echo $j; $j++; ?></td>
          <td><a style="text-decoration:underline;" href='profiles.php?id=<?php echo $row['id']; ?>'><?php echo $row['username']; ?></a>  </td>
          <td><?php echo $row['trainer_team']; ?></td>
          <td><?php echo $row['trainer_code'] ?></td>
          <td><?php echo $row['kanto']; ?></td>
          <td><?php echo $row['johto']; ?></td>
          <td><?php echo $row['hoenn']; ?></td>
          <td><?php echo $row['sinnoh']; ?></td>
          <td><?php echo $row['collector']; ?></td>
          <td><?php echo $row['scientist']; ?></td>
          <td><?php echo $row['backpacker']; ?></td>
          <td><?php echo $row['battle_girl'];; ?></td>
          <td><?php echo $row['berry_master']; ?></td>
          <td><?php echo $row['gym_leader']; ?></td>
          <td><?php echo $row['idol']; ?></td>
          <td><?php echo $row['great_league_veteran']; ?></td>
          <td><?php echo $row['ultra_league_veteran']; ?></td>
          <td><?php echo $row['master_league_veteran'];?></td>
          <td><?php echo $row['jogger']; ?></td>
          <td><?php echo $row['breeder']; ?></td>
          <td><?php echo $row['pikachu_fan']; ?></td>
          <td><?php echo $row['champion']; ?></td>
          <td><?php echo $row['battle_legend']; ?></td>
          <td><?php echo $row['pokemon_ranger']; ?></td>
          <td><?php echo $row['gentleman']; ?></td>
          <td><?php echo $row['pilot']; ?></td>
          <td><?php echo $row['fisherman']; ?></td>
          <td><?php echo $row['ace_trainer']; ?></td>
          <td><?php echo $row['youngster']; ?></td>
          <td><?php echo $row['cameraman']; ?></td>

        </tr>
        <?php
        $i++;
        }
        //End of While Loop
        //taking the values of each row and storing them in array and finding the ultimate values for the player.
        $max_kanto=($kanto/max($kanto_total))*100;
        $max_johto=($johto/max($johto_total))*100;
        $max_hoenn=($hoenn/max($hoenn_total))*100;
        $max_sinnoh=($sinnoh/max($sinnoh_total))*100;
        $max_collector=($collector/max($collector_total))*100;
        $max_scientist=($scientist/max($scientist_total))*100;
        $max_backpacker=($backpacker/max($backpacker_total))*100;
        $max_battle_girl=($battle_girl/max($battle_girl_total))*100;
        $max_berry_master=($berry_master/max($berry_master_total))*100;
        $max_gym_leader=($gym_leader/max($gym_leader_total))*100;
        $max_idiol=($idol/max($idol_total))*100;
        $max_great_league_veteran=($great_league_veteran/max($great_league_veteran_total))*100;
        $max_ultra_league_veteran=($ultra_league_veteran/max($ultra_league_veteran_total))*100;
        $max_master_league_veteran=($master_league_veteran/max($master_league_veteran_total))*100;
        $max_jogger=($jogger/max($jogger_total))*100;
        $max_breeder=($breeder/max($breeder_total))*100;
        $max_pikachu_fan=($pikachu_fan/max($pikachu_fan_total))*100;
        $max_champion=($champion/max($champion_total))*100;
        $max_battle_legend=($battle_legend/max($battle_legend_total))*100;
        $max_pokemon_ranger=($pokemon_ranger/max($pokemon_ranger_total))*100;
        $max_gentleman=($gentleman/max($gentleman_total))*100;
        $max_pilot=($pilot/max($pilot_total))*100;
        $max_fisherman=($fisherman/max($fisherman_total))*100;
        $max_ace_trainer=($ace_trainer/max($ace_trainer_total))*100;
        $max_youngster=($youngster/max($youngster_total))*100;
        $max_cameraman=($cameraman/max($cameraman_total))*100;

        //Adding the ultimate values of each row of a player to final total
        $final_total=$max_kanto+$max_johto+$max_hoenn+$max_sinnoh+$max_collector+$max_scientist+$max_backpacker
        +$max_battle_girl+$max_berry_master+$max_gym_leader+$max_idiol+$max_great_league_veteran+$max_ultra_league_veteran
        +$max_master_league_veteran+$max_jogger+$max_breeder+$max_pikachu_fan+$max_champion+$max_battle_legend+$max_pokemon_ranger
        +$max_gentleman+$max_pilot+$max_fisherman+$max_ace_trainer+$max_youngster+$max_cameraman;
        print_r($final_total);

        
         ?>
      </table>
    </div>

</div>


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Boots table javascript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
$('#example').DataTable();
});

</script>
</body>

<?php
}
else{
header('location:../index.php');
}
?>
