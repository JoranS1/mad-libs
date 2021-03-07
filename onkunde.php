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
		<h2>Onkunde</h2>
	
		<form action="<?php echo htmlspecialchars($_SELF["PHP_SELF"])?>" method="post">

			<ul class="input">
				<li>
					<div>
						<span>Wat zou je graag willen kunnen?</span>
						<span class="must"><?php echo $errorArray["kan"]; ?></span>
					</div>
					<input type="text" name="kan" value='<?php echo $array["kan"];?>' >

				</li>
				<li>
				<div>
					<span>Met welke persoon kun je goed opschieten?</span>
					<span class="must"><?php echo $errorArray["persoon"]; ?></span>
				</div>
				<input type="text" name="persoon" value='<?php echo $array["persoon"];?>' >
				</li>
				<li>
					<div>
						<span>Wat is je favoriete getal?</span>
						<span class="must"><?php echo $errorArray["getal"];?></span>
					</div>
					<input type="text" name="getal" value='<?php echo $array["getal"];?>'>
				</li>
				<li>
					<div>
					<span>Wat heb je altijd bij als je op vakantie gaat?</span>
					<span class="must"><?php echo $errorArray["vakantie"];?></span>
				</div>
				<input type="text" name="vakantie" value='<?php echo $array["vakantie"];?>'>
				</li>
				<li>
					<div>
						<span>Wat is je beste persoonlijke eigenschap?</span>
						<span class="must"><?php echo $errorArray["best"];?></span>

					</div>
					<input type="text" name="best"value='<?php echo $array["best"];?>'>
				</li>
				<li>
					<div>
						<span>Wat is je slechtste persoonlijke eigenschap?</span>
						<span class="must"><?php echo $errorArray["slecht"];?></span>
					</div>
					<input type="text" name="slecht"value='<?php echo $array["slecht"];?>'>
				</li>
				<li>
					<div>
						<span>Wat is het ergste dat je kan overkomen?</span>
						<span class="must"><?php echo $errorArray["erg"];?></span>
					</div>
					<input type="text" name="erg"value='<?php echo $array["erg"];?>'>

				</li>
			</ul>

			<input type="submit" name="submit" >
			<br>
			<?php

			if ($submit == true && empty($errorArray)) {
			echo "Er zijn veel mensen die niet kunnen " .$array["kan"].
				". Neem nou ".$array["persoon"]. " Zelfs met de hulp van een " .$array["vakantie"]." of zelfs ".$array["getal"]." kan " .$array["persoon"]. " niet " .$array["kan"]. ". Dat heeft niet te maken met een gebrek aan " .$array["best"]." maar met een teveel aan ".$array["slecht"].". Te veel ".$array["slecht"]. " leidt tot " .$array["erg"]. " en dat is niet goed voor als je wilt " .$array["kan"].". Helaas voor ".$array["persoon"]."";
				}?>
			</p>

	
		</form>
		
	</div>
	<footer> &copy; Joran Schrievers 2021</footer>
</div>
</body>
</html>