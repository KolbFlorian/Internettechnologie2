<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Florians erstes Programm</title>
</head>

<body>
	<h1>IT2 - 05. Oktober 2023</h1>
	<form action="adresse.php" method="post">
		<p><input name="vor">Vorname</p>
		<p><input name="nach">Nachname</p>
		<p><input type="submit"></p>
	</form>
	<?php
		$a=435;
		echo intval($a)."<br>";
			//intval ändert Variable in integer Wert um (ganzzeilenzaehlerig)
		$b="22.6";
		echo intval($b)."<br>";
		echo doubleval($b)."<br>";		
			//doubleval Gleitkommazeilenzaehler
		
	?>
</body>
</html>