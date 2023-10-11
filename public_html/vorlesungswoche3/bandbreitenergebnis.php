<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Bandbreitenrechner</title>
</head>

<body>
	<h1>Deine Bandbreite!</h1>
	<?php
	//Daten aus BMI übernehmen
	$datengroesse=$_POST["datengroesse"];
	$downloadgeschwindigkeit=$_POST["downloadgeschwindigkeit"];
		
	// Zeichenkette in Zahlen umwandeln
	$datengroesse=intval($datengroesse);
	$downloadgeschwindigkeit=intval($downloadgeschwindigkeit);	
	
	
	if($datengroesse!=0 & $downloadgeschwindigkeit!=0)
	{
		// Rechnung durchführen
		$ergebnis=($datengroesse*1024*8/$downloadgeschwindigkeit/60);
	
		// Ergebnis ausgeben
		echo "Die Übertragungszeit von " . $datengroesse . " GB mit einer Downloadgeschwindigkeit von " . $downloadgeschwindigkeit . " Mbit/s liegt bei " . ($ergebnis) . " Minuten."; echo("<br>");
			echo "Das sind umgerechnet " . ($ergebnis/(60)) . " Stunden";

    }
	else echo("Die Datengröße als auch die Downloadgeschwindigkeit darf nicht bei 0 liegen")
		

	
	?>
</body>
</html>