<?php
$array = [];
$errorArray = [];
if($_SERVER["REQUEST_METHOD"] == "POST"){
	foreach ($_POST as $name => $x) {
		if($name == "submit"){
		continue;
	}
	if (!empty($_POST[$name])) {
		$array[$name] = testInput($x);
	}
	else{
		$errorArray[$name] = "Vul hier wat in";
		}
		if(count($array) == 7) {
			$submit =true;
		}
	}
}
	else{
		$sumbit = false;
	}
	function testInput($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Er heerst paniek</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Mad Libs</h1>
	<header>
	<nav>
		<ul class="menu">
			<li><a href="http://localhost/madlibs/paniek1.php"> Er heerst paniek...</a></li>
			<li><a href="http://localhost/madlibs/onkunde.php">Onkunde</a></li>
		</ul>
	</nav>
	</header>
	<div class="wit">
		<h2>Er heerst paniek</h2>
	
		<form action="<?php echo htmlspecialchars($_SELF["PHP_SELF"])?>" method="post">

			<ul class="input">
				<li>
					<div>
						<span>Welk dier zou je nooit als huisdier willen hebben?</span>
						<span class="must"><?php echo $errorArray["dier"]; ?></span>
					</div>
					<input type="text" name="dier" value='<?php echo $array["dier"];?>' >

				</li>
				<li>
				<div>
					<span>Wie is de belangrijkste persoon in je leven?</span>
					<span class="must"><?php echo $errorArray["belangrijk"]; ?></span>
				</div>
				<input type="text" name="belangrijk" value='<?php echo $array["belangrijk"];?>' >
				</li>
				<li>
					<div>
						<span>In welk land zou je graag willen wonen?</span>
						<span class="must"><?php echo $errorArray["land"];?></span>
					</div>
					<input type="text" name="land" value='<?php echo $array["land"];?>'>
				</li>
				<li>
					<div>
					<span>Wat doe je als je je verveelt?</span>
					<span class="must"><?php echo $errorArray["vervelen"];?></span>
				</div>
				<input type="text" name="vervelen" value='<?php echo $array["vervelen"];?>'>
				</li>
				<li>
					<div>
						<span>Met welk speelgoed speelde je als kind het meest?</span>
						<span class="must"><?php echo $errorArray["speelgoed"];?></span>

					</div>
					<input type="text" name="speelgoed"value='<?php echo $array["speelgoed"];?>'>
				</li>
				<li>
					<div>
						<span>Bij welke docent spijbel je het liefst</span>
						<span class="must"><?php echo $errorArray["spijbel"];?></span>
					</div>
					<input type="text" name="spijbel"value='<?php echo $array["spijbel"];?>'>
				</li>
				<li>
					<div>
						<span>Als je €100.000.- had wat zou je dan kopen?</span>
						<span class="must"><?php echo $errorArray["geld"];?></span>
					</div>
					<input type="text" name="geld"value='<?php echo $array["geld"];?>'>

				</li>
				<li>
					<div>
						<span>Wat is je favoriete bezigheid?</span>
						<span class="must"><?php echo $errorArray["bezig"];?></span>
					</div>
					<input type="text" name="bezig"value='<?php echo $array["bezig"];?>'>
				</li>
			</ul>
			
			<input type="submit" name="submit" >
			
			<?php

			if ($submit == true && empty($errorArray)) {
				echo "Er heerst paniek in het koninkrijk ".$array["land"]." . Koning " .$array["spijbel"]. " is ten einde raad en als koning " .$array["spijbel"]."zijn ten-einde-raadsheer ".$array["belangrijk"].". ".$array["belangrijk"]."! Het is een ramp het is een schande
				Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?
				 Mijn ".$array["dier"]." is verdwenen! Zomaar zonder waarschuwing. En ik had net ".$array["speelgoed"]." voor hem gekocht!
				 Majesteit uw " .$array["dier"]." komt vast vanzelf weer terug?
				 Ja, da's leuk en aardig maar hoe moet ik in de tussentijd ".$array["bezig"]." leren?
				 Maar Sire daar kunt u toch uw".$array["geld"]." voor gebruiken? "
				 .$array["belangrijk"]." je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had?"
				 .$array["vervelen"]." Sire."
				
				;}
			?>
	
		</form>
		
	</div>
	<footer> &copy; Joran Schrievers 2021</footer>
</div>
</body>
</html>