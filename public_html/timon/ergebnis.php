<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Unbenanntes Dokument</title>
</head>
	

<body>
	<h1>Dein Ergebnis!</h1>
	
	<!--
	
	//Meine Lösung
	$summe=$_POST["zahl1"]+$_POST["zahl2"];
	
	echo "".$_POST["zahl1"]."+".$_POST["zahl2"];

	$_POST["zahl1"]+$_POST["zahl2"];
	
	echo "=".$_POST[$summe];
	
	//-->
	
	<?php
	//Lösung aus der Vorlesung:
	
	// Zahlen aus Mathe übernehmen
	$zahl1=$_POST["zahl1"];
	$zahl2=$_POST["zahl2"];
		
	// Zeichenkette in Zahlen umwandeln
	$zahl1=intval($zahl1);
	$zahl1=intval($zahl1);
	
	// Rechnung durchführen
	$ergebnis=$zahl1+$zahl2;
	
	// Ergebnis ausgeben
	echo  " $zahl1 + $zahl2 = ".$ergebnis;
	
	?>
	
	<!--

	// Zusatz: Verzweigungen mit if
	
	/* Vergleichsoperatoren
	== gleich
	!= ungleich
	< kleiner als
	> größer als
	>= größer gleich
	<= kleiner gleich
	
	*/

	if($zahl1>=5)
		{
		// Rechnung durchführen
		$ergebnis=$zahl1+$zahl2;
	
		// Ergebnis ausgeben
		echo  " $zahl1 + $zahl2 = ".$ergebnis;	
		}
			else
				{
				echo "Zahl 1 muss größer 5 sein"
		
				}
	//-->
	


</body>
</html>