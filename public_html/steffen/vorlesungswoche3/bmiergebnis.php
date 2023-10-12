<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>BMI-Rechner</title>
		<link rel="stylesheet" type="text/css" href="../../S Bosse/stylesheet/style.css">

</head>
	<h1>Berechne deinen BMI!</h1>
<?php
	//Daten aus BMI übernehmen
	$koerpergewicht=$_POST["koerpergewicht"];
	$koerpergroesse=$_POST["koerpergroesse"];
		
	// Zeichenkette in Zahlen umwandeln
	$koerpergewicht=intval($koerpergewicht);
	$koerpergroesse=intval($koerpergroesse);	
	
	if($koerpergewicht>40&$koerpergewicht<150&&$koerpergroesse<=210)
	{
		// Rechnung durchführen
		$ergebnis=(($koerpergewicht/($koerpergroesse*$koerpergroesse))*10000);
	
		// Ergebnis ausgeben
		echo  " Dein BMI-Wert beträgt = ".$ergebnis;
    }
	else echo("Das Gewicht muss zwischen 40 und 150 kg liegen und die Größe darf 210 cm nicht überschreiten")
			
	?>
	<table>
	<tr><th>Gewicht in kg</th><th>BMI</th></tr>
	<tr><td>65</td><td>22</td></tr>
	
	</table>

<body>
</body>
</html>