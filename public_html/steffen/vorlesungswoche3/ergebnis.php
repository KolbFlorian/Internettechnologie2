<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Unbenanntes Dokument</title>
	<link rel="stylesheet" type="text/css" href="../../S Bosse/stylesheet/style.css">
</head>
	

<body>
	<h1>Dein Ergebnis!</h1>
	
	<?php
	
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


</body>
</html>