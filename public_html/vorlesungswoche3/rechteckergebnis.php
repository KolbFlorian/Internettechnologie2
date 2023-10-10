<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Rechteck Ergebnis</title>

<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">

</head>
	

<body>
	<h1>So groß ist Dein Rechteck!</h1>
	
	<?php
	
	// Zahlen aus Mathe übernehmen
	$seiteA=$_POST["seiteA"];
	$seiteB=$_POST["seiteB"];
		
	// Zeichenkette in Zahlen umwandeln
	$seiteA=intval($seiteA);
	$seiteB=intval($seiteB);
	
	// Rechnung durchführen
	$rechteckergebnis=$seiteA*$seiteB;
	
	// Ergebnis ausgeben
	echo  " $seiteA * $seiteB = ".$rechteckergebnis."qm";
	
	?>


</body>
</html>