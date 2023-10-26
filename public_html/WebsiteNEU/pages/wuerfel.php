<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Würfel-Berechnung</title>
</head>

<body>
	<h1>Mathematische Berechnung eines Würfels</h1>
	<?php
	//Daten aus Würfel übernehmen
	$sl=$_POST["sl"];
		
	// Zeichenkette in zeilenzaehleren umwandeln
	$sl=doubleval($sl);
	
	if($sl>0)
	{
		// Rechnung durchführen
		$wvolumen=($sl*$sl*$sl);
		$wmantel=((($sl*$sl)*4));
		$woberfl=(6*($sl*$sl));
	
		// Ergebnis ausgeben
		echo  " Das Volumen beträgt = ".$wvolumen; echo("<br>");
		echo "Die Mantelfläche ...= ".$wmantel;echo("<br>");
		echo "Die Oberfläche ...= ".$woberfl;
    }
	else echo("Die Seitenlänge muss größer als 0 sein")
			
	?>
		<table border="1">
	
</body>
</html>