<!-- Form used to add new entries of employee in database -->
<?php


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

		$all=$con->query("SELECT * from user where status='true'") or die($con->error());
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
		while($rows = mysqli_fetch_array($all)){

		$kanto_total[]=$rows['kanto'];
		$johto_total[]=$rows['johto'];
		$hoenn_total[]=$rows['hoenn'];
		$sinnoh_total[]=$rows['sinnoh'];
		$collector_total[]=$rows['collector'];
		$scientist_total[]=$rows['scientist'];
		$backpacker_total[]=$rows['backpacker'];
		$battle_girl_total[]=$rows['battle_girl'];
		$berry_master_total[]=$rows['berry_master'];
		$gym_leader_total[]=$rows['gym_leader'];
		$idol_total[]=$rows['idol'];
		$great_league_veteran_total[]=$rows['great_league_veteran'];
		$ultra_league_veteran_total[]=$rows['ultra_league_veteran'];
		$master_league_veteran_total[]=$rows['master_league_veteran'];
		$jogger_total[]=$rows['jogger'];
		$breeder_total[]=$rows['breeder'];
		$pikachu_fan_total[]=$rows['pikachu_fan'];
		$champion_total[]=$rows['champion'];
		$battle_legend_total[]=$rows['battle_legend'];
		$pokemon_ranger_total[]=$rows['pokemon_ranger'];
		$gentleman_total[]=$rows['gentleman'];
		$pilot_total[]=$rows['pilot'];
		$fisherman_total[]=$rows['fisherman'];
		$ace_trainer_total[]=$rows['ace_trainer'];
		$youngster_total[]=$rows['youngster'];
		$cameraman_total[]=$rows['cameraman'];

		$i++;
		}
		//End of While Loop
		//taking the values of each row and storing them in array and finding the ultimate values for the player.
		echo $max_kanto=($kanto/max($kanto_total))*100; echo "<br>";
		echo $max_johto=($johto/max($johto_total))*100;echo "<br>";
		echo $max_hoenn=($hoenn/max($hoenn_total))*100;echo "<br>";
		echo $max_sinnoh=($sinnoh/max($sinnoh_total))*100;echo "<br>";
		echo $max_collector=($collector/max($collector_total))*100;echo "<br>";
		echo $max_scientist=($scientist/max($scientist_total))*100;echo "<br>";
		echo $max_backpacker=($backpacker/max($backpacker_total))*100;echo "<br>";
		echo $max_battle_girl=($battle_girl/max($battle_girl_total))*100;echo "<br>";
		echo $max_berry_master=($berry_master/max($berry_master_total))*100;echo "<br>";
		echo $max_gym_leader=($gym_leader/max($gym_leader_total))*100;echo "<br>";
		echo $max_idiol=($idol/max($idol_total))*100;echo "<br>";
		echo $max_great_league_veteran=($great_league_veteran/max($great_league_veteran_total))*100;echo "<br>";
		echo $max_ultra_league_veteran=($ultra_league_veteran/max($ultra_league_veteran_total))*100;echo "<br>";
		echo $max_master_league_veteran=($master_league_veteran/max($master_league_veteran_total))*100;echo "<br>";
		echo $max_jogger=($jogger/max($jogger_total))*100;echo "<br>";
		echo $max_breeder=($breeder/max($breeder_total))*100;echo "<br>";
		echo $max_pikachu_fan=($pikachu_fan/max($pikachu_fan_total))*100;echo "<br>";
		echo $max_champion=($champion/max($champion_total))*100;echo "<br>";
		echo $max_battle_legend=($battle_legend/max($battle_legend_total))*100;echo "<br>";
		echo $max_pokemon_ranger=($pokemon_ranger/max($pokemon_ranger_total))*100;echo "<br>";
		echo $max_gentleman=($gentleman/max($gentleman_total))*100;echo "<br>";
		echo $max_pilot=($pilot/max($pilot_total))*100;echo "<br>";
		echo $max_fisherman=($fisherman/max($fisherman_total))*100;echo "<br>";
		echo $max_ace_trainer=($ace_trainer/max($ace_trainer_total))*100;echo "<br>";
		echo $max_youngster=($youngster/max($youngster_total))*100;echo "<br>";
		echo $max_cameraman=($cameraman/max($cameraman_total))*100;echo "<br>";

		//Adding the ultimate values of each row of a player to final total
		$final_total=$max_kanto+$max_johto+$max_hoenn+$max_sinnoh+$max_collector+$max_scientist+$max_backpacker
		+$max_battle_girl+$max_berry_master+$max_gym_leader+$max_idiol+$max_great_league_veteran+$max_ultra_league_veteran
		+$max_master_league_veteran+$max_jogger+$max_breeder+$max_pikachu_fan+$max_champion+$max_battle_legend+$max_pokemon_ranger
		+$max_gentleman+$max_pilot+$max_fisherman+$max_ace_trainer+$max_youngster+$max_cameraman;
		print_r($final_total);

		if($update)
		{
			$final_update=$con->query("UPDATE user SET total='$final_total' where id=$id") or die($con->error());
			if($final_update){
				echo "<script type='text/javascript'>alert('Information updated successfully!');</script>";
				echo "<script type='text/javascript'> document.location = 'http://saiviru.in/pokestats/main.php'; </script>";
			}

		}


	}
?>


<form class="" action="" method="post" >



<div class="carousel-item active">

	<div class="form-group">
		<label for="kanto">Kanto:</label>
		<input type="number" name="kanto" class="form-control" value="<?php echo $kanto;?>">
	</div>
	<div class="form-group">
		<label for="johto">Johto:</label>
		<input type="number" name="johto" class="form-control" value="<?php echo $johto;?>">
	</div>

	<div class="form-group">
		<label for="hoenn">Hoenn:</label>
		<input type="number" name="hoenn" class="form-control" value="<?php echo $hoenn;?>">
	</div>
	<div class="form-group">
		<label for="sinnoh">Sinnoh:</label>
		<input type="number" name="sinnoh" class="form-control" value="<?php echo $sinnoh;?>">
	</div>
	<div class="form-group">
		<button class="btn btn-deep-orange" name="add">Add My Stats</button>
	</div>
</div>

<div class="carousel-item ">
<div class="form-group">
	<label for="great_league_veteran">Great League Veteran:</label>
	<input type="number" name="great_league_veteran" class="form-control" value="<?php echo $great_league_veteran;?>">
</div>
<div class="form-group">
	<label for="ultra_league_veteran">Ultra League Veteran:</label>
	<input type="number" name="ultra_league_veteran" class="form-control" value="<?php echo $ultra_league_veteran;?>">
</div>
<div class="form-group">
	<label for="master_league_veteran">Master League Veteran:</label>
	<input type="number" name="master_league_veteran" class="form-control" value="<?php echo $master_league_veteran;?>" >
</div>
<div class="form-group">
	<button class="btn btn-deep-orange" name="add">Add My Stats</button>
</div>
</div>

<div class="carousel-item ">
	<div class="form-group">
		<label for="collector">Collector:</label>
		<input type="number" name="collector" class="form-control" value="<?php echo $collector;?>">
	</div>

	<div class="form-group">
		<label for="scientist">Scientist:</label>
		<input type="number" name="scientist" class="form-control" value="<?php echo $scientist;?>">
	</div>
	<div class="form-group">
		<label for="backpacker">Backpacker:</label>
		<input type="number" name="backpacker" class="form-control" value="<?php echo $backpacker;?>">
	</div>
	<div class="form-group">
		<label for="battle_girl">Battle Girl:</label>
		<input type="number" name="battle_girl" class="form-control" value="<?php echo $battle_girl;?>">
	</div>
	<div class="form-group">
		<label for="berry_master">Berry Master:</label>
		<input type="number" name="berry_master" class="form-control" value="<?php echo $berry_master;?>">
	</div>
	<div class="form-group">
		<label for="gym_leader">Gym Leader:</label>
		<input type="number" name="gym_leader" class="form-control" value="<?php echo $gym_leader;?>">
	</div>
	<div class="form-group">
		<button class="btn btn-deep-orange" name="add">Add My Stats</button>
	</div>
</div>

<div class="carousel-item ">
	<div class="form-group">
		<label for="idol">Idol:</label>
		<input type="number" name="idol" class="form-control" value="<?php echo $idol;?>">
	</div>

	<div class="form-group">
		<label for="jogger">Jogger:</label>
		<input type="number" name="jogger" class="form-control" value="<?php echo $jogger;?>">
	</div>
	<div class="form-group">
		<label for="breeder">Breeder:</label>
		<input type="number" name="breeder" class="form-control" value="<?php echo $breeder;?>">
	</div>
	<div class="form-group">
		<label for="pikachu_fan">Pikachu Fan:</label>
		<input type="number" name="pikachu_fan" class="form-control" value="<?php echo $pikachu_fan;?>">
	</div>
	<div class="form-group">
		<label for="champion">Champion:</label>
		<input type="number" name="champion" class="form-control" value="<?php echo $champion;?>">
	</div>
	<div class="form-group">
		<label for="battle_legend">Battle Legend:</label>
		<input type="number" name="battle_legend" class="form-control" value="<?php echo $battle_legend;?>">
	</div>
	<div class="form-group">
		<button class="btn btn-deep-orange" name="add">Add My Stats</button>
	</div>
</div>

<div class="carousel-item ">
	<div class="form-group">
		<label for="pokemon_ranger">Pokemon Ranger:</label>
		<input type="number" name="pokemon_ranger" class="form-control" value="<?php echo $pokemon_ranger;?>">
	</div>
	<div class="form-group">
		<label for="gentleman">Gentleman:</label>
		<input type="number" name="gentleman" class="form-control" value="<?php echo $gentleman;?>">
	</div>
	<div class="form-group">
		<label for="pilot">Pilot:</label>
		<input type="number" name="pilot" class="form-control" value="<?php echo $pilot;?>">
	</div>
	<div class="form-group">
		<label for="fisherman">Fisherman:</label>
		<input type="number" name="fisherman" class="form-control" value="<?php echo $fisherman;?>">
	</div>
	<div class="form-group">
		<label for="ace_trainer">Ace Trainer:</label>
		<input type="number" name="ace_trainer" class="form-control" value="<?php echo $ace_trainer;?>">
	</div>
	<div class="form-group">
		<label for="youngster">Youngster:</label>
		<input type="number" name="youngster" class="form-control" value="<?php echo $youngster;?>">
	</div>
	<div class="form-group">
		<label for="cameraman">Cameraman:</label>
		<input type="number" name="cameraman" class="form-control" value="<?php echo $cameraman;?>">
	</div>
	<div class="form-group">
		<button class="btn btn-deep-orange" name="add">Add My Stats</button>
	</div>
</div>



</form>
<script type="text/javascript">

</script>
