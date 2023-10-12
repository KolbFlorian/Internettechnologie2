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
	$summe=$_POST["zeilenzaehler1"]+$_POST["zeilenzaehler2"];
	
	echo "".$_POST["zeilenzaehler1"]."+".$_POST["zeilenzaehler2"];

	$_POST["zeilenzaehler1"]+$_POST["zeilenzaehler2"];
	
	echo "=".$_POST[$summe];
	
	//-->
	
	<?php
	//Lösung aus der Vorlesung:
	
	// zeilenzaehleren aus Mathe übernehmen
	$zeilenzaehler1=$_POST["zeilenzaehler1"];
	$zeilenzaehler2=$_POST["zeilenzaehler2"];
		
	// Zeichenkette in zeilenzaehleren umwandeln
	$zeilenzaehler1=intval($zeilenzaehler1);
	$zeilenzaehler1=intval($zeilenzaehler1);
	
	// Rechnung durchführen
	$ergebnis=$zeilenzaehler1+$zeilenzaehler2;
	
	// Ergebnis ausgeben
	echo  " $zeilenzaehler1 + $zeilenzaehler2 = ".$ergebnis;
	
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

	if($zeilenzaehler1>=5)
		{
		// Rechnung durchführen
		$ergebnis=$zeilenzaehler1+$zeilenzaehler2;
	
		// Ergebnis ausgeben
		echo  " $zeilenzaehler1 + $zeilenzaehler2 = ".$ergebnis;	
		}
			else
				{
				echo "zeilenzaehler 1 muss größer 5 sein"
		
				}
	//-->
	


</body>
</html>